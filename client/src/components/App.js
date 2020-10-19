import React from 'react';
import { connect } from "react-redux";
import './App.css';

const App = (props) => {

    return (
        <div className="security container">
            <header className="security-header"></header>
            <div className="row sign-up justify-content-md-center">
                <div className="col-lg-5">
                    <div className="d-flex justify-content-center">
                        <h1 className="sign-up">Inscription.</h1>
                    </div>
                    <div>

                        {/* Registering form */}
                        <form className="sign-up">
                            <div className="form-group row">
                                <div className="col-sm-6">
                                    <input className="form-control" id="lastName" placeholder="Nom" />
                                </div>
                                <div className="col-sm-6">
                                    <input className="form-control" id="firstName" placeholder="Prénom" />
                                </div>
                            </div>
                            <div className="form-group row">
                                <div className="col-sm-6">
                                    <input type="password" className="form-control" id="password" placeholder="Mot de passe"/>
                                </div>
                                <div className="col-sm-6">
                                    <input type="password" className="form-control" id="repeatPassword" placeholder="Vérification du mot de passe"/>
                                </div>
                            </div>
                            <div className="form-group">
                                <input type="email" className="form-control" id="email" aria-describedby="emailHelp" placeholder="Adresse email"/>
                            </div>
                            <div className="form-group row">
                                <div className="col-sm-6">
                                    <input type="date" className="form-control" id="birthdate" placeholder="Date de naissance"/>
                                </div>
                                <div className="col-sm-6">
                                    <input type="tel" className="form-control" id="phone" placeholder="Numéro de téléphone"/>
                                </div>
                            </div>
                            <a href="/" className="btn btn-submit btn-primary btn-block">
                                S'inscrire
                            </a>
                            <hr/>
                            <a href="/" className="btn btn-google btn-block">
                                <i className="fab fa-google fa-fw"></i> S'inscrire avec Google
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default connect()(App);
