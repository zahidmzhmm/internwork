import React, {useEffect, useState} from 'react';

const Travel = ({data, allData, setData, key}) => {

    return (
        <>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Name of Country</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.country}
                           onChange={(e) =>
                               setData(
                                   allData.map((item) => {
                                       if (item.id === data.id) {
                                           return {...data, country: e.target.value};
                                       }
                                       return item;
                                   })
                               )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Purpose</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.purpose}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, purpose: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Duration of Stay</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.duration}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, duration: e.target.value};
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
        </>
    );
};

export default Travel;
