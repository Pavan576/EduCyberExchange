<?php
// FROM HASH: 4434f2464fadbb5999fe2ef96e9f477a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Dashboard');
	$__finalCompiled .= '
';
	$__templater->includeCss('dashboard.css');
	$__finalCompiled .= '

<style>
.blockMessage.blockMessage--none {
    display: none;
}
	
.p-body-header {
    display: none;
}

.p-body-inner {
    max-width: 1300px;
}	
</style>

<div class="d-flex flex-column flex-lg-row">
' . $__templater->includeTemplate('new_sidenav', $__vars) . '
	<section class="content-container">
		<div class="d-flex flex-row align-items-stretch">
			<div class="flex-fill">
				<div class="wrapper mb-3">
					<div class="main-row p-3 d-flex flex-row align-items-center dashboard-welcome bg-tertiary">
						<div class="avatar-48 flex-shrink-0 flex-grow-0 mr-3">
							<img class="rounded-circle" src="' . $__templater->escape($__templater->method($__vars['xf']['visitor'], 'getAvatarUrl', array('o', null, true, ))) . '" alt="' . $__templater->escape($__vars['xf']['visitor']['username']) . '" title="' . $__templater->escape($__vars['xf']['visitor']['username']) . '" height="48" width="48" loading="lazy">
							</div>
							<div class="flex-fill">
								<div class="font-weight-bold font-size-12 mb-1">Hello, ' . $__templater->escape($__vars['xf']['visitor']['username']) . '</div>
								<div class="font-weight-bold font-size-07 text-secondary text-uppercase">
									<i class="fas fa-times-circle mr-1"></i> Not Upgraded
								</div>
							</div>
							<div class="ml-3 flex-shrink-0 flex-grow-0">
								<a href="/upgrade">
									<button type="button" class="btn btn-upgrade btn-sm">
										<i class="fas fa-star mr-1"></i> Upgrade
									</button>
								</a>
							</div>
							<div class="ml-2 flex-shrink-0 flex-grow-0">
								<a href="https://nulledbb.com/dashboard/security/2fa">
									<button type="button" class="btn btn-danger btn-sm">
										<i class="fas fa-exclamation-circle mr-1"></i> 2FA
									</button>
								</a>
							</div>
						</div>
						<div class="dashboard-account-overview main-row d-flex flex-row align-items-center flex-wrap">
							<div class="d-flex flex-row align-items-center dashboard-stats-column p-3 flex-shrink-0 flex-grow-0 position-relative">
								<div class="icon-30 flex-shrink-0 flex-grow-0 bg-primary rounded d-flex justify-content-center align-items-center mr-3 font-weight-bold"> 
									<i class="fas fa-book-open"> </i> 
								</div>
								<div class="flex-fill no-overflow">
									<div class="font-weight-bold">' . $__templater->filter($__vars['xf']['visitor']['message_count'], array(array('number', array()),), true) . '</div>
									<div class="description no-overflow text-secondary font-size-07 font-weight-bold text-uppercase">Posts</div>
								</div>
							</div>
							<div class="d-flex flex-row align-items-center dashboard-stats-column p-3 flex-shrink-0 flex-grow-0">
								<div class="icon-30 flex-shrink-0 flex-grow-0 bg-primary rounded d-flex justify-content-center align-items-center mr-3 font-weight-bold">
									<i class="fas fa-coins"></i>
								</div>
								<div class="flex-fill no-overflow">
									<div class="font-weight-bold">0</div>
									<div class="description no-overflow text-secondary font-size-07 font-weight-bold text-uppercase">Credits</div>
								</div>
							</div>
							<div class="d-flex flex-row align-items-center dashboard-stats-column p-3 flex-shrink-0 flex-grow-0">
								<div class="icon-30 flex-shrink-0 flex-grow-0 bg-primary rounded d-flex justify-content-center align-items-center mr-3 font-weight-bold">
									<i class="fas fa-heart"></i>
								</div>
								<div class="flex-fill no-overflow">
									<div class="font-weight-bold">' . $__templater->filter($__vars['xf']['visitor']['reaction_score'], array(array('number', array()),), true) . '</div>
									<div class="description no-overflow text-secondary font-size-07 font-weight-bold text-uppercase">Likes</div>
								</div>
							</div>
							<div class="d-flex flex-row align-items-center dashboard-stats-column p-3 flex-shrink-0 flex-grow-0">
								<div class="icon-30 flex-shrink-0 flex-grow-0 bg-primary rounded d-flex justify-content-center align-items-center mr-3 font-weight-bold">
									<i class="fas fa-star"></i>
								</div>
								<div class="flex-fill no-overflow">
									<div class="font-weight-bold">0</div>
									<div class="description no-overflow text-secondary font-size-07 font-weight-bold text-uppercase">Reputation</div>
								</div>
							</div>
							<div class="d-flex flex-row align-items-center dashboard-stats-column p-3 flex-shrink-0 flex-grow-0">
								<div class="icon-30 flex-shrink-0 flex-grow-0 bg-primary rounded d-flex justify-content-center align-items-center mr-3 font-weight-bold">
									<i class="fas fa-user-plus"></i>
								</div>
								<div class="flex-fill no-overflow">
									<div class="font-weight-bold">0</div>
									<div class="description no-overflow text-secondary font-size-07 font-weight-bold text-uppercase">Referrals</div>
								</div>
								<div class="action-button ml-3 flex-shrink-0 flex-grow-0">
									<a href="/referrals">
									<button type="button" class="btn btn-tertiary btn-xs">
										<i class="fas fa-plus"></i>
									</button>
									</a>	
								</div>
							</div>
							<div class="d-flex flex-row align-items-center dashboard-stats-column flex-fill p-3 flex-shrink-0 flex-grow-0">
								<div class="icon-30 flex-shrink-0 flex-grow-0 bg-primary rounded d-flex justify-content-center align-items-center mr-3 font-weight-bold">
									<i class="fas fa-key"></i>
								</div>
								<div class="flex-fill no-overflow">
									<div class="description no-overflow text-secondary font-size-07 font-weight-bold text-uppercase">Change Your Password</div>
								</div>
								<div class="action-button ml-3 flex-shrink-0 flex-grow-0">
									<a href="/account/security">
									<button type="button" class="btn btn-tertiary btn-xs">
										<i class="fas fa-cog"></i>
									</button>
									</a>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ml-3 flex-shrink-0 flex-grow-0 d-none d-md-block">
					<div class="wrapper mb-3">
						<div class="main-row dashboard-refer"></div>
						<div class="main-row p-3">
							<div class="mb-3 text-center font-weight-bold dashboard-refer-text">Refer your friends to this site</div>
							<button class="btn copy-clip btn-tertiary btn-block btn-sm" data-clipboard-text="https://nulledbb.com/member.php?action=register&amp;referrer=308133">Copy to clipboard</button>
						</div>
					</div>
				</div>
				<script type="text/javascript" src="https://cdn.nulledbb.com/static/js/vendor/toastr/toastr.min.js"></script>
				<script type="text/javascript" src="https://cdn.nulledbb.com/static/js/vendor/clipboard/clipboard.min.js"></script>
				<script>
	const clipboard = new ClipboardJS(\'.copy-clip\');
	clipboard.on(\'success\', function(e) {
		toastr.success(\'Successfully copied referral link\')
	});
	clipboard.on(\'error\', function(e) {
		toastr.error(\'Error copying referral link\')
	});
</script>
			</div>
			' . $__templater->form('
					<div class="wrapper mb-3">
						<div class="main-title bg-primary">Note on Profile</div>
						<div class="main-row p-3">
							<div class="form-group">
								<textarea name="custom_fields[noteonprofile]" cols="1" rows="10" class="form-control">' . $__templater->escape($__vars['xf']['visitor']['Profile']['custom_fields']['noteonprofile']) . '</textarea>
							</div>
						</div>
					</div>
					<div class="text-center">
							<input type="submit" class="btn btn-primary" name="submit" value="Update Notepad">
						</div>
				', array(
		'action' => $__templater->func('link', array('account/dashboard', ), false),
		'ajax' => 'true',
		'class' => 'block',
		'data-force-flash-message' => 'true',
	)) . '
					</section>
				</div>



';
	$__templater->breadcrumb($__templater->preEscaped('User Control Panel'), $__templater->func('link', array('account', ), false), array(
	));
	return $__finalCompiled;
}
);