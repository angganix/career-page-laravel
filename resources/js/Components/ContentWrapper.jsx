import React from 'react'

const ContentWrapper = ({ children }) => {
    return (
        <div className="py-4">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {children}
            </div>
        </div>
    )
}

export default ContentWrapper