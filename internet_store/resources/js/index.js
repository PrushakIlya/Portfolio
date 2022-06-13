import ReactDOM from 'react-dom/client';
import React from 'react'
import App from './App'


const root = ReactDOM.createRoot(document.getElementById('root'));

const Index = () => {
    return (
        <React.StrictMode >
           <App/>
        </React.StrictMode>
    );
}
root.render(Index());
