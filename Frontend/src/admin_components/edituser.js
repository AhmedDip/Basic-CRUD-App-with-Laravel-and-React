
import axios from "axios";
import { useEffect, useState } from "react";
import { useHistory, useParams } from "react-router-dom";
import Sidemenu from "../Layouts/sidemenu"

function EditUser() {
    const history = useHistory();
    const { id } = useParams();
    const [error, setError] = useState({
        error: []
    })
    const [data, setData] = useState({
        user_name: "",
        phone_number: "",
        email: "",
        address: "",
        user_type: "",
    });
    useEffect(() => {
        loadEditUser();
    }, [])
    const loadEditUser = () => {
        const result = axios.get(`http://127.0.0.1:8000/api/edituser/${id}`)
            .then(response => {
                setData(response.data.users)
            })
            .catch(error => {
                alert("something Went Wrong");
            })

    }

    const onchange = (e) => {
        setData({ ...data, [e.target.name]: e.target.value });
    }
    const submitted = (e) => {
        e.preventDefault();
        // console.log(data);
        Edit();
        //console.log(error);

    }

    const Edit = () => {
        const result = axios.post(`http://127.0.0.1:8000/api/edituseroparation/${id}`, JSON.stringify(data), { headers: { "Content-Type": "application/json" } })
            .then(response => {
                if (response.data.status === 200) {
                    alert("User Eddited Succefully");
                    history.push("/userlist")
                } else {
                    setError({
                        error: response.data.error
                    })
                }
            })
            .catch(error => {
                alert("Edit User Here");
            })

    }

    const errors ={
        color:'red',
    }

    return (
        <>
            <Sidemenu />
           
                                    <div>
                                        <div>
                                            <form onSubmit={(e) => submitted(e)}>

                                                <div>
                                                    <label for="val-skill">User Type <span
                                                        >*</span>
                                                    </label>
                                                    <div>
                                                        <select name="user_type" id="val-skill"
                                                            name="val-skill" onChange={(e) => onchange(e)} name="user_type" value={data.user_type} disabled >
                                                            <option >User Type</option>
                                                            <option value="student">Student</option>
                                                            <option value="teacher">Teacher</option>
                                                            <option value="admin">Admin</option>
                                                        </select>

                                                        {/* error */}
                                                        <div style={errors}>
                                                            <p>{error.error.user_type}</p>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="val-username">Username <span
                                                        >*</span>
                                                    </label>
                                                    <div>
                                                        <input type="text" id="val-username"
                                                            name="user_name" placeholder="Enter a username.." onChange={(e) => onchange(e)} name="user_name" value={data.user_name} />
                                                        {/* error */}
                                                        <div  style={errors}>
                                                            <p>{error.error.user_name}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div>
                                                    <label for="val-email">Email <span
                                                        >*</span>
                                                    </label>
                                                    <div>
                                                        <input type="text" id="val-email" name="email"
                                                            placeholder="Your valid email.." onChange={(e) => onchange(e)} name="email" value={data.email} />
                                                        {/* error */}
                                                        <div  style={errors}>
                                                            <p>{error.error.email}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label 
                                                        for="val-confirm-password">Address <span
                                                           >*</span>
                                                    </label>
                                                    <div>
                                                        <input type="text"  id="val-confirm-password"
                                                            name="address" placeholder="Address" onChange={(e) => onchange(e)} name="address" value={data.address} />
                                                        {/* error */}
                                                        <div  style={errors}>
                                                            <p>{error.error.address}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="val-phoneus">Phone (BD)
                                                        <span >*</span>
                                                    </label>
                                                    <div >
                                                        <input type="text" id="val-phoneus"
                                                            name="phone_number" placeholder="+88 017XXXXXXX" onChange={(e) => onchange(e)} name="phone_number" value={data.phone_number} />
                                                        {/* error */}
                                                        <div  style={errors}>
                                                            <p>{error.error.phone_number}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="val-phoneus">

                                                    </label>
                                                    <div>
                                                        <button type="submit"
                                                           >Edit User</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                         
        </>

    );
}

export default EditUser;