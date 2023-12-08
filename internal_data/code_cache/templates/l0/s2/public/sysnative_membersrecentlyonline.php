<?php
// FROM HASH: 8c588e0b9262d2543582b1d633664fc8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('online_count_widget.css');
	$__finalCompiled .= '
';
	$__templater->inlineCss('
   .box .box-footer {
   margin-top: auto;
   }
   .box .box-footer .links ul {
   display: flex;
   justify-content: center;
   }
   .box .box-footer .links ul li {
   padding: 10px 14px;
   cursor: pointer;
   }
   .box .box-footer .groups ul {
   display: flex;
   justify-content: center;
   gap: 10px;
   display: none;
	padding: 0
   }

   .box .box-footer .groups ul.active {
   display: flex;
	animation: fadeIn .3s ease;
   }
   .links ul {
   padding: 0;
	list-style: none;
   }
	
	.links {
	font-size: 13px;
    font-weight: 700;
	}
	.staff-group {
	color: white;
	}
	.upgrade-group {
	color: gold;
	}
	
	.groups ul {
	list-style: none;
	}
	
	@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
');
	$__finalCompiled .= '
';
	$__templater->inlineJs('
const footer = document.querySelector(".box-footer"),
      links = footer.querySelectorAll(".links ul li"),
      groups = footer.querySelectorAll(".groups ul")

for (let i = 0; i < links.length; i++) {
  links[i].onclick = event => {
    const isActive = groups[i].classList.contains("active")
    for (let j = 0; j < groups.length; j++) {
      groups[j].classList.remove("active")
    }
    if (!isActive) {
      groups[i].classList.add("active")
    }
  }
}
');
	$__finalCompiled .= '
';
	if ($__templater->method($__vars['xf']['visitor'], 'hasPermission', array('sysnative_improvedstats', 'sys_recently_online', ))) {
		$__finalCompiled .= '
   ';
		$__templater->includeCss('sysnative_improvedstats.less');
		$__finalCompiled .= '
   <div class="col-md-7 col-lg-6 snipcss-xQlCd">
      <h3 class="font-display font-lg text-white font-weight:500 mb-1 mt-5">
         Member Activity
      </h3>
      <div class="row">
         <div class="col-12">
            <div class="card style-ct6GJ" id="style-ct6GJ">
               <div class="mb-3">
                  <span class="text-white font-weight-bold font-sm mr-2 d-lg-inline">
                  Online Today
                  </span>
                  <span class="bg-gray font-xs px-2 py-1 text-white rounded mx-2 font-weight-light d-none d-md-inline">
                  ' . 'sysnative_improvedstats_online_recently_x_members' . ' Members
                  </span>
               </div>
               <div class="mb-1 style-AnxrT" id="style-AnxrT">
                  <span class="member-activity">
                     <ul class="comma-list">
                     ';
		if (!$__templater->test($__vars['recentlyOnline']['users'], 'empty', array())) {
			$__finalCompiled .= '
                        <ul class="listInline listInline--comma">
                           ';
			if ($__vars['options']['displayStyle'] == 0) {
				$__finalCompiled .= '
                              ';
				if ($__templater->isTraversable($__vars['recentlyOnline']['users'])) {
					foreach ($__vars['recentlyOnline']['users'] AS $__vars['user']) {
						$__finalCompiled .= '
                                 ' . $__templater->func('trim', array('
                                    <li>
                                       ' . $__templater->func('username_link', array($__vars['user'], true, array(
							'class' => ((!$__vars['user']['visible']) ? 'username--invisible' : ''),
							'style' => 'font-size: 15px;',
						))) . '
                                    </li>
                                 '), false) . '
                              ';
					}
				}
				$__finalCompiled .= '
                           ';
			}
			$__finalCompiled .= '
                           ';
			if ($__vars['options']['displayStyle'] == 1) {
				$__finalCompiled .= '
                              ';
				if ($__templater->isTraversable($__vars['recentlyOnline']['users'])) {
					foreach ($__vars['recentlyOnline']['users'] AS $__vars['user']) {
						$__finalCompiled .= '
                                 ' . $__templater->func('trim', array('
                                    <span class="sys_online_ua_group">
                                       <span class="sys_online_avatar">
                                          ' . $__templater->func('avatar', array($__vars['user'], 'xxs', false, array(
						))) . '
                                       </span>
                                       <span class="sys_online_username">
                                          ' . $__templater->func('username_link', array($__vars['user'], true, array(
							'class' => ((!$__vars['user']['visible']) ? 'username--invisible' : ''),
						))) . '
                                       </span>
                                    </span>
                                 '), false) . '
                              ';
					}
				}
				$__finalCompiled .= '
                           ';
			}
			$__finalCompiled .= '
                           ';
		} else {
			$__finalCompiled .= '
                           ' . 'sysnative_improvedstats_no_members_recently_online' . '
                     ';
		}
		$__finalCompiled .= '
                     </ul>
                  </span>
               </div>
               <div class="box">
                  <div class="box-footer">
                     <div class="links">
                        <ul>
                           <li class="staff-group">Staff</li>
                           <li class="upgrade-group">Upgrade</li>
                           <li class="staff-group">Earned</li>
                        </ul>
                     </div>
                     <div class="groups">
                        <ul>
                           <li class="username--style3">Admin</li>
                           <li class="username--style11">Supervisor</li>
                           <li class="username--style24">Developer</li>
                           <li class="username--style10">Moderator</li>
                        </ul>
                        <ul>
                           <li class="username--style15">Solar</li>
                           <li class="username--style33">Cosmic</li>
                        </ul>
                        <ul>
                           <li class="username--style20">Legend</li>
                           <li class="username--style19">Super Power User</li>
                           <li class="username--style18">Power User</li>
                           <li class="username--style2">Senior</li>
                           <li class="username--style2">Veteran</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
';
	}
	return $__finalCompiled;
}
);