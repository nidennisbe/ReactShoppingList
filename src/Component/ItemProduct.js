import React, {Component} from "react";
import './ItemProduct.css';
import ictrash from '../ictrash.png';
import ictag from '../ictag.png';
import icedit from '../icedit.png';
var EmptyList = require('./EmptyList');

class ItemProduct extends Component {
  constructor (props) {
    super (props);
    this.addProduct=this.addProduct.bind(this);
    this.removeProduct= this.removeProduct.bind(this);
    this.updateProduct=this.updateProduct.bind(this);
    this.editProduct=this.editProduct.bind(this);
  }
  addProduct(product){
    return <li
    key={product.key}>{product.text}<img className="tag"src={ictag} alt="tagImg"/>
    <img src={ictrash} alt = "delBtn"onClick={() => this.removeProduct(product.key)} />
    <img className="edit" alt="editBtn" src={icedit} onClick={() => this.updateProduct(product.text,product.key)}/>
    </li>

  }

  removeProduct(key){
    this.props.remove(key);
    console.log(key);
  }

  updateProduct(product,key){
    this.props.update(product,key);
    console.log(product,key);
  }
  editProduct(product,key){
     this.props.edit(product,key);
  }


  render () {

    var productAdding = this.props.adding;
    var listProducts = productAdding.map(this.addProduct);

    return (
      <div className ="card">
      <ul>

      <div className="itemNumber">{listProducts.length}</div>
      <div className= "title">
      <h2>Product List </h2>
      <span onClick={() => this.editProduct(this)}>{listProducts.length > 0 ? listProducts: <EmptyList/>}</span>
      </div>

      </ul>
      </div>
    );
  }
}
export default ItemProduct;
