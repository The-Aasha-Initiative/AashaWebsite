'use strict';

const e = React.createElement;

class LikeButton extends React.Component {

  render() {
    

    return e(
      'div',
      { onClick: () => this.setState({ liked: true }) },
      'Lorem ipsum dolor sit amet consectetur.'
    );
  }
}

const domContainer = document.querySelector('#reactcomp');
ReactDOM.render(e(LikeButton), domContainer);