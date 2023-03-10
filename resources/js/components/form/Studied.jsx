import React from 'react';

const Studied = ({setData, allData, key, data}) => {
    return (
        <>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Name of Institution</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.institute}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, institute: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Location</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.location}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, location: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Level of Study</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.level}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, level: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Program Start(Arrival) Date</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="date" className="form-control" value={data.start}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, start: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Program End(Departure) Date</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="date" className="form-control" value={data.end}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, end: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Course of Study</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.description}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, description: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
        </>
    );
};

export default Studied;
