import { combineReducers } from "redux";
import security from '../reducer/security';

// List of all global's reducers to combine
const globalReducer = combineReducers({
    security
});

// List of all entity reducers to combine
const entityReducer = combineReducers({
    // TODO
});

export default combineReducers({ global: globalReducer, entity: entityReducer });
