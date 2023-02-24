// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class TestimonialChild extends Component {

  static slug = 'testimonial_child';

  render() {
    return (
      <Fragment>
          {this.props.content}
      </Fragment>
      
    )
  }
}

export default TestimonialChild;

