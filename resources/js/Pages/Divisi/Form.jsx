import ContentCard from '@/Components/ContentCard'
import ContentWrapper from '@/Components/ContentWrapper'
import Authenticated from '@/Layouts/AuthenticatedLayout'
import { Head } from '@inertiajs/react'
import React from 'react'

const Form = ({ auth, data = null }) => {
    return (
        <Authenticated
            user={auth?.user}
            header={(<h2 className="font-semibold text-xl text-gray-800 leading-tight">{data ? "Edit Divisi" : "Tambah Divisi"}</h2>)}
        >
            <Head title="Form Divisi" />

            <ContentWrapper>
                <ContentCard>
                    <div>Form Divisi</div>
                </ContentCard>
            </ContentWrapper>
        </Authenticated>
    )
}

export default Form