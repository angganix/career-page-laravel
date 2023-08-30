import ContentCard from '@/Components/ContentCard'
import ContentWrapper from '@/Components/ContentWrapper'
import Authenticated from '@/Layouts/AuthenticatedLayout'
import { Head, Link } from '@inertiajs/react'
import React from 'react'
import { AiOutlineEdit, AiOutlinePlus } from 'react-icons/ai';
import { BiTrashAlt } from 'react-icons/bi';

const List = ({ auth, list }) => {
    return (
        <Authenticated
            user={auth?.user}
            header={(
                <div className="flex justify-between items-center">
                    <h2 className="flex-grow font-semibold text-xl text-gray-800 leading-tight">Overview</h2>
                    <div className="flex justify-end items-center gap-x-2">
                        <button type="button" className=""></button>
                        <Link className="p-2 rounded-full flex justify-center items-center text-gray-800 hover:bg-gray-100" title="Add New">
                            <AiOutlinePlus size={24} />
                        </Link>
                    </div>
                </div>
            )}
        >
            <Head title="List Divisi" />

            <ContentWrapper>
                <ContentCard>
                    <div className="p-2 md:p-6">
                        <div className="overflow-x-auto">
                            <table className="table table-auto w-full">
                                <thead>
                                    <tr className="text-gray-500 border-b-2 border-gray-200">
                                        <th className="text-left p-1.5">Nama</th>
                                        <th className="text-left p-1.5">Description</th>
                                        <th className="w-4 p-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody className="text-sm">
                                    {list?.data?.map(item => (
                                        <tr key={item?.id} className="border-b border-gray-100">
                                            <td className="p-1.5">{item?.name}</td>
                                            <td className="p-1.5">{item?.description}</td>
                                            <td className="p-1.5">
                                                <div className="flex justify-center items-center">
                                                    <Link className="p-2 rounded-full flex justify-center items-center text-red-500 hover:bg-gray-100" title="Delete">
                                                        <BiTrashAlt size={18} />
                                                    </Link>
                                                    <Link className="p-2 rounded-full flex justify-center items-center text-blue-500 hover:bg-gray-100" title="Edit">
                                                        <AiOutlineEdit size={18} />
                                                    </Link>
                                                </div>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </ContentCard>
            </ContentWrapper>
        </Authenticated>
    )
}

export default List