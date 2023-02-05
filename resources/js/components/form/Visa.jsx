import React from 'react';

const Visa = ({data, setData}) => {
    return (
        <>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Visa Category</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.category}
                           onChange={(e) => setData.category(e.target.value)}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Year</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.year}
                           onChange={(e) => setData.year(e.target.value)}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Visa Decision</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.decision}
                           onChange={(e) => setData.decision(e.target.value)}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Place of visa application</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.place}
                           onChange={(e) => setData.place(e.target.value)}/>
                </div>
            </div>
        </>
    );
};

export default Visa;
