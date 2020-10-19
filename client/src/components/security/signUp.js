import React from 'react';
import { connect } from "react-redux";

const SignUp = (props) => {
    return (
        <div className="Security container">
            <header className="Security-header"></header>
            <main className="SignUp">
                <h1 className="SignUp">Inscription.</h1>
                <div className="row">
                    <form className="SignUp">
                        <div className="form-group">
                            <label for="firstName" id="firstName-label"></label>
                            <input id="firstName"></input>
                        </div>
                        <div className="form-group">
                            <label for="lastName" id="lastName-label"></label>
                            <input id="lastName"></input>
                        </div>
                        <div className="form-group">
                            <label for="email" id="email-label"></label>
                            <input type="email" id="email"></input>
                        </div>
                        <div className="form-group">
                            <label for="password" id="password-label"></label>
                            <input type="password" id="password"></input>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    )
}

export default connect()(SignUp)