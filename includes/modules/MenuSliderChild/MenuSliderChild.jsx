// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class MenuSliderChild extends Component {

  static slug = 'menu_slider_child';

  render() {
    return (
      <Fragment>
          {this.props.content}
      </Fragment>
      
    )
  }
}

export default MenuSliderChild;

