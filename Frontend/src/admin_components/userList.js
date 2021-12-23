import React, { useEffect, useState } from 'react';
import axios from 'axios';
import ReactHtmlTableToExcel from "react-html-table-to-excel"
import Sidemenu from "../Layouts/sidemenu"
import { Link, useHistory } from 'react-router-dom';


function UserList() {
    const [data, setData] = useState([]);
    const history = useHistory();


    const load = async () => {
        const res = await axios.get("http://127.0.0.1:8000/api/userlist");
        setData(res.data.users);
    }
    useEffect(() => {
        load();
    }, []);


    const checkStatus = (user) => {
        if (user.account_Status === 'active') {
       
            return (
                <>
                    <td><span>{user.account_Status}</span></td>
                    <td><Link to={`/userlist/edit/${user.id}`} >Edit</Link></td>
                    
                    <td><Link onClick={() => { onDelete(user.id) }} >Delete</Link></td>
                </>
            )
        }
    }

   
    const onDelete = (id) => {
        if (window.confirm("Are you sure you want to Delete the user?")) {

            const result = axios.post(`http://127.0.0.1:8000/api/destroy/${id}`)
                .then(response => {
                    if (response.data.status === 200) {
                        alert("User Deleted Succefully");
                        window.location.reload()
                    } else {
                        alert("Something Went Wrong");
                    }
                })
                .catch(error => {
                    alert("Something Went Wrong");
                })

        }
    }

    const styles={
        border:'2px solid black',
    }

   

    return (
      
            <div>
                <Sidemenu />
                <div>
                                <h4>Users Lists</h4>
                            
                                <div>
                                    <table style={styles}>
                                        <thead>
                                            <tr >
                                                <th>Id #</th>
                                                <th>User Name</th>
                                                <th>User type</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Acount Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {
                                                data.map((user) => {
                                                    return (
                                                        <tr style={styles}>
                                                            <td>{user.id}</td>
                                                            <td>{user.user_name}</td>
                                                            <td><span>{user.user_type}</span></td>
                                                            <td>{user.address}</td>
                                                            <td>{user.email}</td>
                                                            <td>{user.phone_number}</td>
                                                            {checkStatus(user)}


                                                        </tr>
                                                    );

                                                })
                                            }

                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th>Id #</th>
                                                <th>User Name</th>
                                                <th>User type</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Acount Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                              
                        
                </div>
            </div>

        </div >

    );
}

export default UserList;