import { Link, useHistory } from "react-router-dom";
import { useState } from "react";
import axios from "axios";

const Login = () => {
    const history = useHistory();
    const [error, setError] = useState({
        error: [],
    })
    const [userData, setData] = useState({
        user_name: "",
        password: ""

    });

    const { user_name, password } = userData;


    const onChange = (e) => {
        setData({ ...userData, [e.target.name]: e.target.value });
    }

    const onsubmit = (e) => {
        e.preventDefault();
        load();
    }
    const load = async () => {
        const res = await axios.post("http://127.0.0.1:8000/api/signin", JSON.stringify(userData), { headers: { "Content-Type": "application/json" } })
            .then(response => {
                if (response.data.status === 200) {
                    if (response.data.user.account_Status === 'pending') {
                        setError({
                            error: "Your account is in pending"
                        })
                    } else if (response.data.user.account_Status === 'block') {
                        setError({
                            error: "Your account is Blocked. Please contact with an admin"
                        })
                    } else {
                        if (response.data.user.user_type === 'admin') {
                            window.sessionStorage.setItem('status', 'true');
                            window.sessionStorage.setItem('user', JSON.stringify(response.data.user));
                            history.push('/dashboard');
                        } 
                        else if (response.data.user.user_type === 'student') {
                            window.sessionStorage.setItem('status', 'true');
                            window.sessionStorage.setItem('user', JSON.stringify(response.data.user));
                            history.push('/dashboard'); 
                        }
                        else if (response.data.user.user_type === 'teacher') {
                            window.sessionStorage.setItem('status', 'true');
                            window.sessionStorage.setItem('user', JSON.stringify(response.data.user));
                            history.push('/dashboard'); 
                        }

                
                    }

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
    
                                <div>

                                    <Link to="#">
                                        <h4>LogIn</h4>
                                    </Link>
                                    <form onSubmit={(e) => onsubmit(e)} >
                                        <div>
                                            <input type="text" name="user_name"
                                                placeholder="User Name" value={user_name} onChange={(e) => onChange(e)} required />
                                        </div>

                                        {/* error */}
                                        <div>
                                            <p>{error.error.user_name}</p>
                                        </div>

                                        <div className="form-group">
                                            <input type="password" name="password"
                                                placeholder="Password" onChange={(e) => onChange(e)} value={password} required />
                                        </div>

                                        {/* error */}
                                        <div>
                                            <p>{error.error.password}</p>
                                        </div>

                                        <input type="submit" value="Sign in"/>

                                        {/* error */}
                                        <div>
                                            <p>{(error.error)}</p>
                                        </div>

                                    </form>

                                    <p className="mt-5 login-form__footer">Dont have account?
                                        <Link
                                            to="/signup" className="text-primary">Sign Up</Link> now
                                    </p>

                                </div>
                     

    );
}


export default Login;
