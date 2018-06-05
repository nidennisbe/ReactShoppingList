import React, {Component} from "react";
import './ItemProduct.css';

class ItemProduct extends Component {
  constructor (props) {
    super (props);
    this.addProduct=this.addProduct.bind(this);
    this.removeProduct= this.removeProduct.bind(this);
  }
  addProduct(product){
    return <li onClick={() =>this.removeProduct(product.key)}
      key={product.key}>{product.text}</li>
  }

  removeProduct(key){
    this.props.remove(key);
  }

  render () {
    var productAdding = this.props.adding;
    var listProducts = productAdding.map(this.addProduct);

    return (
      <div class ="card">
          <ul >
              <div class= "title">
                  <h2>Product List</h2>
              </div>
              {listProducts }
          </ul>
      </div>
    );
  }
}
export default ItemProduct;
