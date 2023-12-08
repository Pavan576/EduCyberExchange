<?php
// FROM HASH: 0e16dd21002be78bf61e1bfc6c5d9648
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '@media only screen and (max-width: 1027px) {
.hero-buttons {
	flex-direction: column !important;
	align-items: center;
}
	}

.hero {
    min-height: 75vh;
    width: 100%;
    display: flex;
	justify-content: center;
    align-items: center;
    position: relative;
}

.hero-tittle {
    flex: 0 0 55%;
    z-index: 3;
	margin: 0 auto;
    text-align: center;
}

.hero-tittle h1 {
    font-size: 5rem;
	color: #fff;
	margin-bottom: 3px;
}

.hero-tittle p {
    font-size: 2.2rem;
    margin-top: 3rem;
    margin-bottom: 4rem;
    color: rgba(255,255,255,.34);
    width: 70%;
    line-height: 1.4;
}

.hero-btn {
	border: none;
    margin-bottom: 5px;
    border-radius: 2px;
    padding-top: 6px;
    padding-right: 12px;
    padding-bottom: 6px;
    padding-left: 12px;
    width: 350px;
    font-weight: bold;
    font-size: 15px;
    text-transform: uppercase;
    border-radius: 6px;
    cursor: pointer;
    color: #fff;
    background-size: 200%;
    transition: 0.6s;
    text-decoration: none;
}

.hero-btn:hover {
	background-position: right;
}

.login {
	background-image: unset;
	transition: 0.6s;
	outline: solid 1px #ca003d;
	padding: 15px 0;
}

.login:hover {
	background-image: linear-gradient(to left, #ca003d, #c33660, #9b0431);
	outline: unset;
}

.register {
	background-image: linear-gradient(to left, #ca003d, #c33660, #9b0431);
	padding: 15px 0;
}

.hero-buttons {
	display: flex;
	flex-direction: row;
	justify-content: center;
	gap: 15px;
}

.grid-container {
    display: grid;
    grid-gap: 10px;
    grid-template-columns: auto auto auto;
    padding: 15px;
    max-width: 1320px;
    text-align: center;
    margin: auto;
    margin-top: 20px;
    margin-bottom: 80px;
}

.grid-item {
    background-color: #212121;
    padding: 30px;
    font-size: 20px;
    text-align: center;
    border-radius: 20px;
    color: #fff;
    transition: top ease 0.5s;
    position: relative;
    top: 0;
}

.grid-item:hover {
    top: -10px;
}';
	return $__finalCompiled;
}
);