<?php
// FROM HASH: b1d879601657490fb21fcef9dce940c6
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<style>
.preloader {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 1);
    z-index: 9999;
    color: #fff;
    font-size: 24px;
    flex-direction: column;
    opacity: 1; /* Initially, set opacity to 1 */
    transition: opacity 0.5s ease; /* Add a transition for opacity */
}

.loader {
    border: 4px solid #1B1B1E;
    border-top: 4px solid #ca003d;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
    margin-bottom: 20px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>';
	return $__finalCompiled;
}
);