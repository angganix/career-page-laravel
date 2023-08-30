<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Divisi::when($this->search != "", function ($query) {
            $query->where("name", "like", "%{$this->search}%");
        })
            ->orderBy($this->sortby, $this->sortdir)
            ->paginate($this->limit);
        return Inertia::render("Divisi/List", [
            "list" => $result
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render("Divisi/Form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|unique:divisions"
        ]);

        try {
            Divisi::create($request->only(["name", "description"]));
            return redirect()
                ->route('/divisi')
                ->with(["success" => "Berhasil menyimpan data"]);
        } catch (Exception $e) {
            return back(500)
                ->with([
                    "error" => "Gagal menyimpan data",
                    "message" => $e->getMessage()
                ])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $divisi)
    {
        return Inertia::render("Divisi/Form", [
            "data" => $divisi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Divisi $divisi)
    {
        $request->validate([
            "name" => [
                "required",
                Rule::unique("divisions")->ignore($divisi->id)
            ]
        ]);

        try {
            $divisi->update($request->only(["name", "description"]));
            return redirect()
                ->route("/divisi")
                ->with(["success" => "Berhasil menyimpan data"]);
        } catch (Exception $e) {
            return back(500)
                ->with([
                    "error" => "Gagal menyimpan data",
                    "message" => $e->getMessage()
                ])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi)
    {
        $divisi->delete();
        return redirect("/divisi")
            ->with(["success" => "Berhasil menghapus data"]);
    }
}
