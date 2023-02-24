// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class MenuSliderParent extends Component {

  static slug = 'menu_slider_parent';

  render() {
    return (
      <Fragment>
          {this.props.content}
      </Fragment>
      
    )
  }
}

export default MenuSliderParent;
