import * as types from "../action/types";
import { combineReducers } from "redux";

const INITIAL_STATE = {
    sign_in: false
};

function log(state = INITIAL_STATE, action = {}) {

    switch (action.type) { // /!\ This way don't breaks the main Redux principle: immutability. /!\
        case types.SIGN_IN:
            // TODO
            return state;
        case types.SIGN_IN_FAILURE:
            // TODO
            return state;
        default :
            return state; // === return initialState
    }
}

export default combineReducers({ // List of all entities's reducers to combine
    log
});