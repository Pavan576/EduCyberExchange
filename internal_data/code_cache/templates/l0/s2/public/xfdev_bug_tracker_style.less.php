<?php
// FROM HASH: 25ebd8c22f473fc49368c8e7dbaf34f1
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'html{
  font-size: 16px;
}

body{
  font-size: 14px;
}

.page-header{
  h1{
    font-size: 28.8px;
  }

  #report-button{
    font-size: 13px;
  }
}

.container{
  h2{
    font-size: 22.4px !important;
  }

  h3{
    font-size: 16px !important;
    color: rgba(255, 255, 255, 0.75);
    font-weight: 400;
  }

  .custom-select{
    font-size: 14.4px;
    height: 37px;
  }

  .alert{
    padding: 12px 16px;
  }
}

input.form-control{
  padding: 6px 12px !important;
}

input.form-control::placeholder {
  font-size: 15px;
}

.fr-box.fr-basic{
  background-color: var(--bg-secondary);
  border: 1px solid var(--bg-tertiary);
}

.fr-placeholder{
  font-size: 15px !important;
}

.button.button--primary, button.button a.button.button--primary{
  background: linear-gradient(#DC3544, #DC3541) !important;
}

.fr-box.fr-basic .fr-wrapper:focus-within {
  background-color: #1b202b !important;
}

.form-control{
  color: white !important;
}

@media only screen and (max-width: 600px)  {
  .page-header .container{
    display: block !important;
  }

  #header-title{
    margin-bottom: 5px;
  }
}

#reply-box .main-row:only-child{
  border-radius: unset;
}

@media (min-width: 576px) {
  .main-row:first-child {
    border-radius: unset;
  }
}

.bug-status::before {
  font-size: 14px !important;
}

.closed-reply-box{
  padding: 10px;
  text-align: center;
  font-size: 15px;
	font-weight: 400 !important;
}

.closed-reply-box.fixed{
  background-color: #43A047;
  color: white;
}

.closed-reply-box.not-a-bug{
  background-color: #DC3545;
  color: white;
}

.closed-reply-box.no-permission-to-reply{
  background-color: #DC3545;
  color: whitesmoke;
}

.overlay-container{
  z-index: 1000 !important;
}

.formSubmitRow-controls{
  text-align: center;
  padding-left: 0 !important;
  margin-left: 0 !important;
  margin-right: 0 !important;
}

@media (max-width: 650px) {
  .wrapper {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }
}

@media (max-width: 650px) {
  .actionBar .actionBar-action.actionBar-action--menuItem {
      display: inline-block !important;
  }
}';
	return $__finalCompiled;
}
);