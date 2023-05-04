import React from "react";
import ReactDOM from "react-dom";

const ProfileButton = (props) => {
    return (
        <span>
            {props.profileUser}
            (<a href={props.profileUrl} className="hover:text-orange-300">Profile </a>|
            <a href={props.logoutUrl} className="hover:text-orange-300"> Logout</a>)
        </span>
    );
}

const root = ReactDOM.createRoot(document.getElementById('profile'));
const firstname = document.getElementById('profile').getAttribute('data-firstname');
const lastname = document.getElementById('profile').getAttribute('data-lastname');
const profile = document.getElementById('profile').getAttribute('data-profile');
const logout = document.getElementById('profile').getAttribute('data-logout');

root.render(<ProfileButton profileUser={firstname + ' ' + lastname} profileUrl={profile} logoutUrl={logout} />);
export default ProfileButton;
