import React from 'react';

const Visa = ({data, setData, allData, key}) => {
    return (
        <>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Visa Category</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.category}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, category: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Year</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.year}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, year: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Visa Decision</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.decision}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, decision: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Place of visa application</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.place}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, place: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
        </>
    );
};

export default Visa;
