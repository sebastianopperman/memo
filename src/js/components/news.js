import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';

const News = () => {
	const [posts, setPosts] = useState([]);

	useEffect(() => {
    async function getPosts() {
      let res = await fetch(`${WordPress.site}/wp-json/v2/news`)
			res = await res.json();
      setPosts(res);
    }
		getPosts();
  }, []);
	
	return (
		<div className="posts">
			{posts && posts.map((post, k) => <Post key={k} {...post} />)}
		</div>
	)
}

const Post = post => {
	return (
		<div className='post'>
			<div className="post-image">
				{post.image && <img src={post.image} alt={post.title} />}
			</div>
			<h2>{post.title}</h2>
			<div className="post-date">
				{post.date}
			</div>
			<div className="post-topics">
				{post.topics && post.topics.map((topic,k) => <span key={k}>{topic}</span>)}
			</div>
			{post.fields && <div className="post-fields">
				{Object.keys(post.fields).filter(field => field.charAt(0) !== '_').map((field, k) => (
					<div className="field" key={k}>
						<span>{field}</span>
						{post.fields[field]}
					</div>
				))}
			</div>}
		</div>
	)
}

export default News;
document.querySelector('#news') ? ReactDOM.render(<News />, document.querySelector('#news')) : false;