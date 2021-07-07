'use strict';

const e = React.createElement;

class LikeButton extends React.Component {

  render() {
    

    return e(
      'div',
       null,
      'Untangle your mind '
    );
  }
}

const domContainer = document.querySelector('#reactcomp');
ReactDOM.render(e(LikeButton), domContainer);