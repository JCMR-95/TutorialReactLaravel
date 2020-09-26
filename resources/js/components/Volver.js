import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';


class Volver extends Component {
    
      render() {
        return (
          <div className="container">
            <button type="submit" class="btn btn-primary">
                <a href="/Volver" class="btn btn-primary"> Regresar </a>
            </button>
          </div>
        );
    }

}

export default Volver;


if (document.getElementById('volver')) {
    ReactDOM.render(<Volver />, document.getElementById('volver'));
}