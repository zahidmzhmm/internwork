import axios from "axios";

export const API_URI = "http://internwork.test/api/";
export const FEES = 50;
export const axiosReq = async (page, method = "get", formData = "") => {
    let headers = {
        'Accept': 'application/json',
    };
    if (localStorage.getItem('token') !== undefined && localStorage.getItem('token') !== "") {
        headers["Authorization"] = "Bearer " + localStorage.getItem('token');
    }
    return await axios({
        headers,
        url: API_URI + page,
        method: method,
        data: formData
    }).then(function (response) {
        return response.data;
    }).catch(function (error) {
        return error.response.data;
    });
}
