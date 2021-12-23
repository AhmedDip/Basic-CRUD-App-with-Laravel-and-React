import { useEffect, useState } from "react";
import { Link, useHistory } from "react-router-dom";
import axios from "axios";

const Signup = () => {
    //  const useEffect = useEffect([]);
    const history = useHistory()
    const [error, setError] = useState({
        error: [],
    })
    const [userData, setData] = useState({
        user_name: "",
        phone_number: "",
        email: "",
        password: "",
        address: "",
        user_type: "",
        confirm_password: "",
        errors: [],
    });

    const { user_name, phone_number, email, password, address, user_type, confirm_password } = userData;
    const onChange = (e) => {
        setData({ ...userData, [e.target.name]: e.target.value });
    }



    const onsubmit = (e) => {
        e.preventDefault();
        load();
        // delete data.confirm_password
    }
    const load = async () => {
        const res = await axios.post("http://127.0.0.1:8000/api/signup", JSON.stringify(userData), { headers: { "Content-Type": "application/json" } })
            .then(response => {
                if (response.data.status === 200) {
                    history.push('/login')
                    alert("Registration Succefull");

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





    return (
        
                            <div >
                                <div>

                                    <Link to="#">
                                        <h4>Sign Up</h4>
                                    </Link>

                                    <form onSubmit={(e) => onsubmit(e)}>


                                        <div>
                                            <input type="text" name="user_name"
                                                 placeholder="User Name" value={userData.user_name} onChange={(e) => onChange(e)} required />
                                        </div>
                                        {/* error */}
                                        <div>
                                            <p>{error.error.user_name}</p>
                                        </div>


                                        <div>
                                            <input type="text" value="" name="phone_number"
                                                 placeholder="Phone Number" value={userData.phone_number} onChange={(e) => onChange(e)} required />
                                        </div>
                                        {/* error */}
                                        <div>
                                            <p>{error.error.phone_number}</p>
                                        </div>


                                        <div>
                                            <input type="email" value="" name="email" 
                                                placeholder="Email" value={userData.email} onChange={(e) => onChange(e)} required />
                                        </div>
                                        {/* error */}
                                        <div>
                                            <p>{error.error.email}</p>
                                        </div>

                                        <div>
                                            <input type="password" name="password" className="form-control"
                                                placeholder="Password" value={userData.password} onChange={(e) => onChange(e)} required />
                                        </div>
                                        {/* error */}
                                        <div>
                                            <p>{error.error.password}</p>
                                        </div>

                                        <div>
                                            <input type="password" name="confirm_password"
                                                placeholder="Confirm password" value={userData.confirm_password} onChange={(e) => onChange(e)} required />
                                        </div>
                                        {/* error */}
                                        <div>
                                            <p>{error.error.confirm_password}</p>
                                        </div>

                                        <div>
                                            <input type="text" name="address" value=""
                                                placeholder="Address" value={userData.address} onChange={(e) => onChange(e)} required />
                                        </div>
                                        {/* error */}
                                        <div>
                                            <p>{error.error.address}</p>
                                        </div>

                                        <div>
                                            <label for="val-skill">User Type <span
                                                className="text-danger">*</span>
                                            </label>
                                            <div>
                                                <select id="val-skill" name="user_type" onChange={(e) => onChange(e)}>
                                                    <option value='userData.user_type' >User Type</option>
                                                    <option value="student">Student</option>
                                                    <option value="teacher">Teacher</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                                {/* error */}
                                                <div>
                                                    <p>{error.error.user_type}</p>
                                                </div>
                                            </div>

                                        </div>

                                        <button>Sign in</button>
                                    </form>
                                    <p>Have account
                                        <Link to="/login" className="text-primary">Sign in</Link>now
                                    </p>
                                </div>
                            </div>
                  


    );
}


export default Signup