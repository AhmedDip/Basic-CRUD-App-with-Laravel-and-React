import { NavLink } from "react-router-dom";
const Sidemenu = () => {
    return (
        <div>
            <div>
                <div>
                    
                   <b><NavLink to="/dashboard">Dashboard___ </NavLink></b> 
                   <b> <NavLink to="/adduser">Add users__</NavLink></b> 
                   <b><NavLink to="/userlist">Users List__ </NavLink></b> 
                   <b><NavLink to="/logout">Logout__ </NavLink></b> 
                </div>
            </div>
        </div>
    );
}
export default Sidemenu