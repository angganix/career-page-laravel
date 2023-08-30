import React from 'react'

const ContentCard = ({ children }) => {
    return (
        <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            {children}
        </div>
    )
}

export default ContentCard