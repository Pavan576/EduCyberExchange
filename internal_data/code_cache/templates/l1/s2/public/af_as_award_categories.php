<?php
// FROM HASH: 2800488dacba9d7a73a045f5b9a2b05a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->includeCss('award_list.css');
	$__finalCompiled .= '
';
	$__templater->inlineCss('
   .dataList-totalAwards {
   margin-top: 10px;
   font-size: 14px;
   }
   .nav-link {
   display: block;
   padding: 1.05rem 2.1rem;
   font-size: 1.2rem;
   }
   .p-body-sideNavContent, .p-body-header, .header-section {
   display:none;
   }
   .award-row {
   display: flex;
   flex-direction: row;
   flex: 1;
   align-items: center;
   }
   .flex-fill {
   display: flex;
   flex-direction: row;
   }
');
	$__finalCompiled .= '
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
   $(function () {
    $(\'#myTab a\').click(function (e) {
        e.preventDefault();
        var targetTab = $(this).attr(\'href\');
        
        // Hide all tab content
        $(\'.tab-content > div\').removeClass(\'active\');
        
        // Show the selected tab content
        $(targetTab).addClass(\'active\');
    });
});
</script>
<div class="tab-content" id="myTabContent">
   <ul class="nav nav-tabs award-tabs mb-3 justify-content-center" id="myTab" role="tablist">
      <li class="nav-item active" role="presentation"> <a class="nav-link" id="category_14_tab" data-toggle="tab" href="#category_14" role="tab" aria-controls="category_14" aria-selected="true">General</a>
      </li>
      <li class="nav-item" role="presentation"> <a class="nav-link" id="category_16_tab" data-toggle="tab" href="#category_16" role="tab" aria-controls="category_16" aria-selected="false">Section</a>
      </li>
      <li class="nav-item" role="presentation"> <a class="nav-link" id="category_17_tab" data-toggle="tab" href="#category_17" role="tab" aria-controls="category_17" aria-selected="false">Upgrades</a>
      </li>
      <li class="nav-item" role="presentation"> <a class="nav-link" id="category_19_tab" data-toggle="tab" href="#category_19" role="tab" aria-controls="category_19" aria-selected="false">Earned</a>
      </li>
      <li class="nav-item" role="presentation"> <a class="nav-link" id="category_20_tab" data-toggle="tab" href="#category_20" role="tab" aria-controls="category_20" aria-selected="false">Special</a>
      </li>
      <li class="nav-item" role="presentation"> <a class="nav-link" id="category_21_tab" data-toggle="tab" href="#category_21" role="tab" aria-controls="category_20" aria-selected="false">User Owned</a>
      </li>
      <li class="nav-item" role="presentation"> <a class="nav-link" id="category_22_tab" data-toggle="tab" href="#category_22" role="tab" aria-controls="category_20" aria-selected="false">Promotion</a>
      </li>
   </ul>
   <div class="tab-pane fade category category_14 show active" id="category_14" role="tabpanel" aria-labelledby="category_13_tab">
      <div class="awards-showcase d-flex flex-row flex-wrap">
         ';
	if ($__templater->isTraversable($__vars['awardData']['awardCategories'])) {
		foreach ($__vars['awardData']['awardCategories'] AS $__vars['awardCategoryId'] => $__vars['awardCategory']) {
			$__finalCompiled .= '
            ';
			if ($__templater->isTraversable($__vars['awardData']['awards'][$__vars['awardCategoryId']])) {
				foreach ($__vars['awardData']['awards'][$__vars['awardCategoryId']] AS $__vars['awardId'] => $__vars['award']) {
					$__finalCompiled .= '
               ';
					if ($__vars['awardCategoryId'] == 1) {
						$__finalCompiled .= '
                  <div class="wrapper award-column bg-secondary p-3 d-flex flex-row align-items-center flex-fill">
                     <div class="award-row">
                        <div class="award-preview mr-3 flex-shrink-0 flex-shrink-0">
                           <div class="award-icons" alt="' . $__templater->escape($__vars['award']['title']) . '" title="' . $__templater->escape($__vars['award']['title']) . '">
                              ' . $__templater->func('award_image', array($__vars['award'], ), true) . '
                           </div>
                        </div>
                        <div class="flex-fill">
                           <div class="award-description">
                              <div class="font-size-10 font-weight-bold"><a href="' . $__templater->func('link', array('award-system/recent', $__vars['award'], ), true) . '">' . $__templater->escape($__vars['award']['title']) . '</a>
                              </div>
                              <div class="font-weight-bold text-secondary">' . $__templater->filter($__vars['award']['description'], array(array('nl2br', array()),), true) . '</div>
                           </div>
                        </div>
                        ';
						if ($__vars['xf']['options']['af_as_award_can_request'] AND ($__vars['award']['can_request'] AND (($__vars['award']['allow_multiple'] OR $__templater->test($__vars['award']['UserAward'][$__vars['xf']['visitor']['user_id']], 'empty', array()))))) {
							$__finalCompiled .= '
                           <a data-xf-click="overlay" href="' . $__templater->func('link', array('award-system/request', $__vars['award'], ), true) . '" title="Request" class="awardbtn" style="margin-left: auto !important">Request</a>
                        ';
						}
						$__finalCompiled .= '
                     </div>
                  </div>
               ';
					}
					$__finalCompiled .= '
            ';
				}
			}
			$__finalCompiled .= '
         ';
		}
	}
	$__finalCompiled .= '
      </div>
   </div>
   <div class="tab-pane fade category category_14 active" id="category_14" role="tabpanel" aria-labelledby="category_14_tab">
       <div class="awards-showcase d-flex flex-row flex-wrap">
         ';
	if ($__templater->isTraversable($__vars['awardData']['awardCategories'])) {
		foreach ($__vars['awardData']['awardCategories'] AS $__vars['awardCategoryId'] => $__vars['awardCategory']) {
			$__finalCompiled .= '
            ';
			if ($__templater->isTraversable($__vars['awardData']['awards'][$__vars['awardCategoryId']])) {
				foreach ($__vars['awardData']['awards'][$__vars['awardCategoryId']] AS $__vars['awardId'] => $__vars['award']) {
					$__finalCompiled .= '
               ';
					if ($__vars['awardCategoryId'] == 1) {
						$__finalCompiled .= '
                  <div class="wrapper award-column bg-secondary p-3 d-flex flex-row align-items-center flex-fill">
                     <div class="award-row">
                        <div class="award-preview mr-3 flex-shrink-0 flex-shrink-0">
                           <div class="award-icons" alt="' . $__templater->escape($__vars['award']['title']) . '" title="' . $__templater->escape($__vars['award']['title']) . '">
                              ' . $__templater->func('award_image', array($__vars['award'], ), true) . '
                           </div>
                        </div>
                        <div class="flex-fill">
                           <div class="award-description">
                              <div class="font-size-10 font-weight-bold"><a href="' . $__templater->func('link', array('award-system/recent', $__vars['award'], ), true) . '">' . $__templater->escape($__vars['award']['title']) . '</a>
                              </div>
                              <div class="font-weight-bold text-secondary">' . $__templater->filter($__vars['award']['description'], array(array('nl2br', array()),), true) . '</div>
                           </div>
                        </div>
                        ';
						if ($__vars['xf']['options']['af_as_award_can_request'] AND ($__vars['award']['can_request'] AND (($__vars['award']['allow_multiple'] OR $__templater->test($__vars['award']['UserAward'][$__vars['xf']['visitor']['user_id']], 'empty', array()))))) {
							$__finalCompiled .= '
                           <a data-xf-click="overlay" href="' . $__templater->func('link', array('award-system/request', $__vars['award'], ), true) . '" title="Request" class="awardbtn" style="margin-left: auto !important">Request</a>
                        ';
						}
						$__finalCompiled .= '
                     </div>
                  </div>
               ';
					}
					$__finalCompiled .= '
            ';
				}
			}
			$__finalCompiled .= '
         ';
		}
	}
	$__finalCompiled .= '
      </div>
   </div>
   <div class="tab-pane fade category category_16" id="category_16" role="tabpanel" aria-labelledby="category_16_tab">
      <div class="awards-showcase d-flex flex-row flex-wrap">
         ';
	if ($__templater->isTraversable($__vars['awardData']['awardCategories'])) {
		foreach ($__vars['awardData']['awardCategories'] AS $__vars['awardCategoryId'] => $__vars['awardCategory']) {
			$__finalCompiled .= '
            ';
			if ($__templater->isTraversable($__vars['awardData']['awards'][$__vars['awardCategoryId']])) {
				foreach ($__vars['awardData']['awards'][$__vars['awardCategoryId']] AS $__vars['awardId'] => $__vars['award']) {
					$__finalCompiled .= '
               ';
					if ($__vars['awardCategoryId'] == 10) {
						$__finalCompiled .= '
                  <div class="wrapper award-column bg-secondary p-3 d-flex flex-row align-items-center flex-fill">
                     <div class="award-row">
                        <div class="award-preview mr-3 flex-shrink-0 flex-shrink-0">
                           <div class="award-icons" alt="' . $__templater->escape($__vars['award']['title']) . '" title="' . $__templater->escape($__vars['award']['title']) . '">
                              ' . $__templater->func('award_image', array($__vars['award'], ), true) . '
                           </div>
                        </div>
                        <div class="flex-fill">
                           <div class="award-description">
                              <div class="font-size-10 font-weight-bold"><a href="' . $__templater->func('link', array('award-system/recent', $__vars['award'], ), true) . '">' . $__templater->escape($__vars['award']['title']) . '</a>
                              </div>
                              <div class="font-weight-bold text-secondary">' . $__templater->filter($__vars['award']['description'], array(array('nl2br', array()),), true) . '</div>
                           </div>
                        </div>
                        ';
						if ($__vars['xf']['options']['af_as_award_can_request'] AND ($__vars['award']['can_request'] AND (($__vars['award']['allow_multiple'] OR $__templater->test($__vars['award']['UserAward'][$__vars['xf']['visitor']['user_id']], 'empty', array()))))) {
							$__finalCompiled .= '
                           <a data-xf-click="overlay" href="' . $__templater->func('link', array('award-system/request', $__vars['award'], ), true) . '" title="Request" class="awardbtn" style="margin-left: auto !important">Request</a>
                        ';
						}
						$__finalCompiled .= '
                     </div>
                  </div>
               ';
					}
					$__finalCompiled .= '
            ';
				}
			}
			$__finalCompiled .= '
         ';
		}
	}
	$__finalCompiled .= '
      </div>
   </div>
   <div class="tab-pane fade category category_17" id="category_17" role="tabpanel" aria-labelledby="category_17_tab">
       <div class="awards-showcase d-flex flex-row flex-wrap">
         ';
	if ($__templater->isTraversable($__vars['awardData']['awardCategories'])) {
		foreach ($__vars['awardData']['awardCategories'] AS $__vars['awardCategoryId'] => $__vars['awardCategory']) {
			$__finalCompiled .= '
            ';
			if ($__templater->isTraversable($__vars['awardData']['awards'][$__vars['awardCategoryId']])) {
				foreach ($__vars['awardData']['awards'][$__vars['awardCategoryId']] AS $__vars['awardId'] => $__vars['award']) {
					$__finalCompiled .= '
               ';
					if ($__vars['awardCategoryId'] == 4) {
						$__finalCompiled .= '
                  <div class="wrapper award-column bg-secondary p-3 d-flex flex-row align-items-center flex-fill">
                     <div class="award-row">
                        <div class="award-preview mr-3 flex-shrink-0 flex-shrink-0">
                           <div class="award-icons" alt="' . $__templater->escape($__vars['award']['title']) . '" title="' . $__templater->escape($__vars['award']['title']) . '">
                              ' . $__templater->func('award_image', array($__vars['award'], ), true) . '
                           </div>
                        </div>
                        <div class="flex-fill">
                           <div class="award-description">
                              <div class="font-size-10 font-weight-bold"><a href="' . $__templater->func('link', array('award-system/recent', $__vars['award'], ), true) . '">' . $__templater->escape($__vars['award']['title']) . '</a>
                              </div>
                              <div class="font-weight-bold text-secondary">' . $__templater->filter($__vars['award']['description'], array(array('nl2br', array()),), true) . '</div>
                           </div>
                        </div>
                        ';
						if ($__vars['xf']['options']['af_as_award_can_request'] AND ($__vars['award']['can_request'] AND (($__vars['award']['allow_multiple'] OR $__templater->test($__vars['award']['UserAward'][$__vars['xf']['visitor']['user_id']], 'empty', array()))))) {
							$__finalCompiled .= '
                           <a data-xf-click="overlay" href="' . $__templater->func('link', array('award-system/request', $__vars['award'], ), true) . '" title="Request" class="awardbtn" style="margin-left: auto !important">Request</a>
                        ';
						}
						$__finalCompiled .= '
                     </div>
                  </div>
               ';
					}
					$__finalCompiled .= '
            ';
				}
			}
			$__finalCompiled .= '
         ';
		}
	}
	$__finalCompiled .= '
      </div>
   </div>
   <div class="tab-pane fade category category_19" id="category_19" role="tabpanel" aria-labelledby="category_19_tab">
      <div class="awards-showcase d-flex flex-row flex-wrap">
         ';
	if ($__templater->isTraversable($__vars['awardData']['awardCategories'])) {
		foreach ($__vars['awardData']['awardCategories'] AS $__vars['awardCategoryId'] => $__vars['awardCategory']) {
			$__finalCompiled .= '
            ';
			if ($__templater->isTraversable($__vars['awardData']['awards'][$__vars['awardCategoryId']])) {
				foreach ($__vars['awardData']['awards'][$__vars['awardCategoryId']] AS $__vars['awardId'] => $__vars['award']) {
					$__finalCompiled .= '
               ';
					if ($__vars['awardCategoryId'] == 5) {
						$__finalCompiled .= '
                  <div class="wrapper award-column bg-secondary p-3 d-flex flex-row align-items-center flex-fill">
                     <div class="award-row">
                        <div class="award-preview mr-3 flex-shrink-0 flex-shrink-0">
                           <div class="award-icons" alt="' . $__templater->escape($__vars['award']['title']) . '" title="' . $__templater->escape($__vars['award']['title']) . '">
                              ' . $__templater->func('award_image', array($__vars['award'], ), true) . '
                           </div>
                        </div>
                        <div class="flex-fill">
                           <div class="award-description">
                              <div class="font-size-10 font-weight-bold"><a href="' . $__templater->func('link', array('award-system/recent', $__vars['award'], ), true) . '">' . $__templater->escape($__vars['award']['title']) . '</a>
                              </div>
                              <div class="font-weight-bold text-secondary">' . $__templater->filter($__vars['award']['description'], array(array('nl2br', array()),), true) . '</div>
                           </div>
                        </div>
                        ';
						if ($__vars['xf']['options']['af_as_award_can_request'] AND ($__vars['award']['can_request'] AND (($__vars['award']['allow_multiple'] OR $__templater->test($__vars['award']['UserAward'][$__vars['xf']['visitor']['user_id']], 'empty', array()))))) {
							$__finalCompiled .= '
                           <a data-xf-click="overlay" href="' . $__templater->func('link', array('award-system/request', $__vars['award'], ), true) . '" title="Request" class="awardbtn" style="margin-left: auto !important">Request</a>
                        ';
						}
						$__finalCompiled .= '
                     </div>
                  </div>
               ';
					}
					$__finalCompiled .= '
            ';
				}
			}
			$__finalCompiled .= '
         ';
		}
	}
	$__finalCompiled .= '
      </div>
   </div>
   <div class="tab-pane fade category category_20" id="category_20" role="tabpanel" aria-labelledby="category_20_tab">
 <div class="awards-showcase d-flex flex-row flex-wrap">
         ';
	if ($__templater->isTraversable($__vars['awardData']['awardCategories'])) {
		foreach ($__vars['awardData']['awardCategories'] AS $__vars['awardCategoryId'] => $__vars['awardCategory']) {
			$__finalCompiled .= '
            ';
			if ($__templater->isTraversable($__vars['awardData']['awards'][$__vars['awardCategoryId']])) {
				foreach ($__vars['awardData']['awards'][$__vars['awardCategoryId']] AS $__vars['awardId'] => $__vars['award']) {
					$__finalCompiled .= '
               ';
					if ($__vars['awardCategoryId'] == 7) {
						$__finalCompiled .= '
                  <div class="wrapper award-column bg-secondary p-3 d-flex flex-row align-items-center flex-fill">
                     <div class="award-row">
                        <div class="award-preview mr-3 flex-shrink-0 flex-shrink-0">
                           <div class="award-icons" alt="' . $__templater->escape($__vars['award']['title']) . '" title="' . $__templater->escape($__vars['award']['title']) . '">
                              ' . $__templater->func('award_image', array($__vars['award'], ), true) . '
                           </div>
                        </div>
                        <div class="flex-fill">
                           <div class="award-description">
                              <div class="font-size-10 font-weight-bold"><a href="' . $__templater->func('link', array('award-system/recent', $__vars['award'], ), true) . '">' . $__templater->escape($__vars['award']['title']) . '</a>
                              </div>
                              <div class="font-weight-bold text-secondary">' . $__templater->filter($__vars['award']['description'], array(array('nl2br', array()),), true) . '</div>
                           </div>
                        </div>
                        ';
						if ($__vars['xf']['options']['af_as_award_can_request'] AND ($__vars['award']['can_request'] AND (($__vars['award']['allow_multiple'] OR $__templater->test($__vars['award']['UserAward'][$__vars['xf']['visitor']['user_id']], 'empty', array()))))) {
							$__finalCompiled .= '
                           <a data-xf-click="overlay" href="' . $__templater->func('link', array('award-system/request', $__vars['award'], ), true) . '" title="Request" class="awardbtn" style="margin-left: auto !important">Request</a>
                        ';
						}
						$__finalCompiled .= '
                     </div>
                  </div>
               ';
					}
					$__finalCompiled .= '
            ';
				}
			}
			$__finalCompiled .= '
         ';
		}
	}
	$__finalCompiled .= '
      </div>
   </div>
   <div class="tab-pane fade category category_21" id="category_21" role="tabpanel" aria-labelledby="category_21_tab">
       <div class="awards-showcase d-flex flex-row flex-wrap">
         ';
	if ($__templater->isTraversable($__vars['awardData']['awardCategories'])) {
		foreach ($__vars['awardData']['awardCategories'] AS $__vars['awardCategoryId'] => $__vars['awardCategory']) {
			$__finalCompiled .= '
            ';
			if ($__templater->isTraversable($__vars['awardData']['awards'][$__vars['awardCategoryId']])) {
				foreach ($__vars['awardData']['awards'][$__vars['awardCategoryId']] AS $__vars['awardId'] => $__vars['award']) {
					$__finalCompiled .= '
               ';
					if ($__vars['awardCategoryId'] == 6) {
						$__finalCompiled .= '
                  <div class="wrapper award-column bg-secondary p-3 d-flex flex-row align-items-center flex-fill">
                     <div class="award-row">
                        <div class="award-preview mr-3 flex-shrink-0 flex-shrink-0">
                           <div class="award-icons" alt="' . $__templater->escape($__vars['award']['title']) . '" title="' . $__templater->escape($__vars['award']['title']) . '">
                              ' . $__templater->func('award_image', array($__vars['award'], ), true) . '
                           </div>
                        </div>
                        <div class="flex-fill">
                           <div class="award-description">
                              <div class="font-size-10 font-weight-bold"><a href="' . $__templater->func('link', array('award-system/recent', $__vars['award'], ), true) . '">' . $__templater->escape($__vars['award']['title']) . '</a>
                              </div>
                              <div class="font-weight-bold text-secondary">' . $__templater->filter($__vars['award']['description'], array(array('nl2br', array()),), true) . '</div>
                           </div>
                        </div>
                        ';
						if ($__vars['xf']['options']['af_as_award_can_request'] AND ($__vars['award']['can_request'] AND (($__vars['award']['allow_multiple'] OR $__templater->test($__vars['award']['UserAward'][$__vars['xf']['visitor']['user_id']], 'empty', array()))))) {
							$__finalCompiled .= '
                           <a data-xf-click="overlay" href="' . $__templater->func('link', array('award-system/request', $__vars['award'], ), true) . '" title="Request" class="awardbtn" style="margin-left: auto !important">Request</a>
                        ';
						}
						$__finalCompiled .= '
                     </div>
                  </div>
               ';
					}
					$__finalCompiled .= '
            ';
				}
			}
			$__finalCompiled .= '
         ';
		}
	}
	$__finalCompiled .= '
      </div>
   </div>
   <div class="tab-pane fade category category_21" id="category_22" role="tabpanel" aria-labelledby="category_21_tab">
       <div class="awards-showcase d-flex flex-row flex-wrap">
         ';
	if ($__templater->isTraversable($__vars['awardData']['awardCategories'])) {
		foreach ($__vars['awardData']['awardCategories'] AS $__vars['awardCategoryId'] => $__vars['awardCategory']) {
			$__finalCompiled .= '
            ';
			if ($__templater->isTraversable($__vars['awardData']['awards'][$__vars['awardCategoryId']])) {
				foreach ($__vars['awardData']['awards'][$__vars['awardCategoryId']] AS $__vars['awardId'] => $__vars['award']) {
					$__finalCompiled .= '
               ';
					if ($__vars['awardCategoryId'] == 8) {
						$__finalCompiled .= '
                  <div class="wrapper award-column bg-secondary p-3 d-flex flex-row align-items-center flex-fill">
                     <div class="award-row">
                        <div class="award-preview mr-3 flex-shrink-0 flex-shrink-0">
                           <div class="award-icons" alt="' . $__templater->escape($__vars['award']['title']) . '" title="' . $__templater->escape($__vars['award']['title']) . '">
                              ' . $__templater->func('award_image', array($__vars['award'], ), true) . '
                           </div>
                        </div>
                        <div class="flex-fill">
                           <div class="award-description">
                              <div class="font-size-10 font-weight-bold"><a href="' . $__templater->func('link', array('award-system/recent', $__vars['award'], ), true) . '">' . $__templater->escape($__vars['award']['title']) . '</a>
                              </div>
                              <div class="font-weight-bold text-secondary">' . $__templater->filter($__vars['award']['description'], array(array('nl2br', array()),), true) . '</div>
                           </div>
                        </div>
                        ';
						if ($__vars['xf']['options']['af_as_award_can_request'] AND ($__vars['award']['can_request'] AND (($__vars['award']['allow_multiple'] OR $__templater->test($__vars['award']['UserAward'][$__vars['xf']['visitor']['user_id']], 'empty', array()))))) {
							$__finalCompiled .= '
                           <a data-xf-click="overlay" href="' . $__templater->func('link', array('award-system/request', $__vars['award'], ), true) . '" title="Request" class="awardbtn" style="margin-left: auto !important">Request</a>
                        ';
						}
						$__finalCompiled .= '
                     </div>
                  </div>
               ';
					}
					$__finalCompiled .= '
            ';
				}
			}
			$__finalCompiled .= '
         ';
		}
	}
	$__finalCompiled .= '
      </div>
</div>';
	return $__finalCompiled;
}
);