// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class TestimonialParent extends Component {

  static slug = 'testimonial_parent';

  render() {
    return (
      <Fragment>
          {this.props.content}
      </Fragment>
      
    )
  }
}

export default TestimonialParent;
