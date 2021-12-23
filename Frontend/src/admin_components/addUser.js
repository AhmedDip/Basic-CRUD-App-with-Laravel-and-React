import axios from "axios";
import { useState } from "react";
import { useHistory } from "react-router-dom";
import Sidemenu from "../Layouts/sidemenu"


function AddUser() {
    const history = useHistory();
    const [error, setError] = useState({
        error: []
    })
    const [data, setData] = useState({
        user_name: "",
        phone_number: "",
        email: "",
        password: "",
        address: "",
        user_type: "",
        confirm_password: "",
    });


    const onchange = (e) => {
        setData({ ...data, [e.target.name]: e.target.value });
    }
    const submitted = (e) => {
        e.preventDefault();
        // console.log(data);
        load();


    }

    const load = () => {
        const result = axios.post("http://127.0.0.1:8000/api/adduser", JSON.stringify(data), { headers: { "Content-Type": "application/json" } })
            .then(response => {
                if (response.data.status === 200) {
                    alert("User Added Succefully");
                    history.push("/userlist")
                } else {
                    setError({
                        error: response.data.error
                    })
                }
            })
            .catch(error => {
                alert("Something Went Wrong");
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

                             <div>
                                 <form onSubmit={(e) => submitted(e)}>
                                          <div>
                                              <label for="val-skill">User Type <span>*</span>
                                                  </label>
                                                    <div>
                                                        <select  name="user_type" id="val-skill"
                                                            name="val-skill" onChange={(e) => onchange(e)} name="user_type" value={data.user_type} >
                                                            <option >User Type</option>
                                                            <option value="student">Student</option>
                                                            <option value="teacher">Teacher</option>
                                                
                                                            <option value="admin">Admin</option>
                                                        </select>

                                                        {/* error */}
                                                        <div>
                                                            <p style={errors}>{error.error.user_type}</p>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="val-username">Username <span>*</span>
                                                    </label>
                                                    <div>
                                                        <input type="text" id="val-username"
                                                            name="user_name" placeholder="Enter a username.." onChange={(e) => onchange(e)} name="user_name" value={data.user_name} />
                                                        {/* error */}
                                                        <div>
                                                            <p style={errors}>{error.error.user_name}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div>
                                                    <label for="val-email">Email <span
                                                        >*</span>
                                                    </label>
                                                    <div>
                                                        <input type="text" id="val-email" name="email"
                                                            onChange={(e) => onchange(e)} name="email" value={data.email} />
                                                        {/* error */}
                                                        <div>
                                                            <p style={errors}>{error.error.email}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="val-password">Password <span
                                                        >*</span>
                                                    </label>
                                                    <div>
                                                        <input type="password" id="val-password"
                                                            name="password" onChange={(e) => onchange(e)} name="password" value={data.password} />
                                                        {/* error */}
                                                        <div>
                                                            <p style={errors}>{error.error.password}</p>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div>
                                                    <label 
                                                        for="val-confirm-password">Confirm Password <span
                                                            >*</span>
                                                    </label>
                                                    <div>
                                                        <input type="password" 
                                                             name="con_password"
                                                            placeholder="..and confirm it!" onChange={(e) => onchange(e)} name="confirm_password" value={data.confirm_password} />
                                                        {/* error */}
                                                        <div>
                                                            <p style={errors}>{error.error.confirm_password}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label
                                                        for="val-confirm-password">Address <span
                                                            >*</span>
                                                    </label>
                                                    <div>
                                                        <input type="text"
                                                            name="address" placeholder="Address" onChange={(e) => onchange(e)} name="address" value={data.address} />
                                                        {/* error */}
                                                        <div>
                                                            <p style={errors}>{error.error.address}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="val-phoneus">Phone (BD)
                                                        <span>*</span>
                                                    </label>
                                                    <div>
                                                        <input type="text"
                                                            name="phone_number" placeholder="+88 01XXXXXXX" onChange={(e) => onchange(e)} name="phone_number" value={data.phone_number} />
                                                        {/* error */}
                                                        <div>
                                                            <p style={errors}>{error.error.phone_number}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                      
                                                    <div >
                                                        <button type="submit"
                                                           >Add User</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                 
                        

                </div>
            </div>
        </>

    );
}

export default AddUser;