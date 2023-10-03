
console.log('popo');

import React, { useState } from 'react';
function LikeButton() {
    const [likes, setLikes] = useState(0);
    return (
        <button onClick={() => setLikes(likes + 1)}>
            {likes} Likes
        </button>
    );
}
export default LikeButton;
/*class LikeButton extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            likes: props.likes || 0,
            isLiked: props.isLiked || false
        };
    }
    render() {
        return React.createElement('button', { className : 'btn btn-link'}, "I Like");
    }
}

document.querySelectorAll('span.react-like').forEach(function(span){
    ReactDOM.render(React.createElement(LikeButton), span);
})*/
