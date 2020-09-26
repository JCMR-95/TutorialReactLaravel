import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import {Table, Column, Cell} from 'fixed-data-table';
import axios from 'axios';


export default class Listado extends Component {

    constructor(props){
        super(props);
        this.state={
            frutas:[]
        }
      }

      componentDidMount(){
        this._isMounted = true;
        
        axios.get('http://tutorialreactlaravel.test/api/frutas/lista').then(response=>{
          this.setState({frutas:response.data})
        }).catch(error=>{
          alert("Error "+error)
        })
      }

      componentWillUnmount() {
        this._isMounted = false;
      }
    
      render() {
        return (
          <div className="container">
            <br/>
            <h3>Listado de Frutas</h3>
            <hr/>

            <table className="table table-bordered order-table ">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Fruta</th>
                  <th>Precio</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody id="bodytable">
                  {this.renderList()}
              </tbody>
            </table>

          </div>
        );
    }

    renderList(){

      return this.state.frutas.map((data)=>{

        return(
          <tr>
            <td>{data.id}</td>
            <td>{data.nombreFruta}</td>
            <td>{data.precioFruta}</td>
            <td>
              <a href={"/editar/"+ data.id} className="btn btn-primary">
                  Detalles/Editar
              </a>
            </td>
            <td>
              <a href={"/eliminar/"+ data.id} className="btn btn-secondary">
                  Eliminar
              </a>
            </td>
          </tr>
        )

      })

    }
}


if (document.getElementById('listado')) {
    ReactDOM.render(<Listado />, document.getElementById('listado'));
}