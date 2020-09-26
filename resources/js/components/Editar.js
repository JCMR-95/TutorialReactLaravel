import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';


class Editar extends Component {

  constructor (props) {

    super(props)
    this.state = {
      nombreFruta: '',
      precioFruta: ''
    }

    this.onChangeValue = this.onChangeValue.bind(this);
    this.onSubmitButton = this.onSubmitButton.bind(this);

  }

    onChangeValue(e) {
        this.setState({
            [e.target.name]: e.target.value
        });
    }

    onSubmitButton(e) {
        e.preventDefault();

        axios.post('/actualizarDato', {
            nombreFruta: {nombreFruta},
            precioFruta: this.state.precioFruta
        })

        .then(function (response) {
            console.log(response.data);
        })

        .catch(function (error) {
            console.log(error);
        });

        this.setState({
            nombreFruta: '',
            precioFruta: ''
        })
    }


  componentDidMount () {

  }

   
  render () {

    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Editar Datos</div>
                        <div className="card-body">
                            <form onSubmit={this.onSubmitButton}>
                                <strong>Nombre Fruta:</strong>
                                <input type="text" name="nombreFruta" disabled="disabled" className="form-control" value={nombreFruta} onChange={this.onChangeValue} />
                                <strong>Precio de Fruta:</strong>
                                <textarea className="form-control" name="precioFruta" value={this.state.precioFruta} onChange={this.onChangeValue}></textarea>
                                <button className="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    )
  }
}

export default Editar;

if (document.getElementById('editar')) {
    ReactDOM.render(<Editar />, document.getElementById('editar'));
}
