import React, { Component } from 'react';
import nlogo from './nlogo.png';
import './App.css';

class App extends React.Component {
  constructor(props) {
     super(props);
     this.state = {value: ''};

     this.handleChange = this.handleChange.bind(this);
     this.handleSubmit = this.handleSubmit.bind(this);
   }

   handleChange(event) {
     this.setState({value: event.target.value});
   }

   handleSubmit(event) {
     alert('A name was submitted: ' + this.state.value);
     event.preventDefault();
   }

  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={nlogo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to Nidennis React Shopping List</h1>
        </header>
      </div>
    );

  }

}


export default App;
//
//
// function Form(){
//   return (
//
//   );
// }
// ReactDOM.render(<Form/> title="Title" qty="Quantity"/>,document.quarySelector('#formNewItem'));
