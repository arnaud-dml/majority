import { createStore, applyMiddleware, compose } from "redux";
import { composeWithDevTools } from 'redux-devtools-extension'
import thunk from "redux-thunk";
import logger from "redux-logger";
import rootReducers from "./index";

import { calculatingTotalMiddleware } from "../middleware/accounting";

export function getMiddlewares() {
    const middlewares = [ // List of all custom middlewares
        calculatingTotalMiddleware
    ];

    //config thunk
    middlewares.push(thunk);

    //config logger
    if (process.env.NODE_ENV === "development") {
        middlewares.push(logger);
    }

    return middlewares;
}

// const enhancer = applyMiddleware(...getMiddlewares());

export default function configureStore(initialState = {}) {
    // const composeEnhancers =  window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ || compose;
    // const enhancers = composeEnhancers(applyMiddleware(...getMiddlewares()));

    const middlewareEnhancer = applyMiddleware(...getMiddlewares());
    const enhancers = [middlewareEnhancer];
    const composedEnhancers = composeWithDevTools(...enhancers);

    // return createStore(rootReducers, initialState, enhancers);
    const store = createStore(rootReducers, initialState, composedEnhancers);
    return store;
}