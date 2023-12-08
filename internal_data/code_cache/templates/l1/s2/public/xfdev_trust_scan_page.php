<?php
// FROM HASH: 19b490e6997003f3b13ce8837ae7a43e
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<style>
    .ip-section {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }
	@media (max-width:1200px) {
		.ip-section {
			padding-left:0;
			padding-right:0;
		}
	}

    .ip-section-header {
        width: 100%;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .ip-card {
        flex: 1 0 300px;
        background-color: #212121;
		border: 1px solid #ffffff14;
        color: #fff;
        padding: 20px;
        border-radius: 8px;
        margin-right: 20px;
        margin-bottom: 20px;
    }

    .ip-card-label {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .ip-card-value {
        font-weight: bold;
        margin-left: 5px;
    }

    .ip-link {
        color: #fff;
        text-decoration: none;
    }

    .ip-link:hover {
        text-decoration: underline;
    }

    .icon {
        margin-right: 5px;
    }
</style>

<div class="ip-section">
    <div class="ip-section-header">
        <i class="fas fa-info-circle icon" style="color: #fff;"></i>
        IP Overview
    </div>

    <div class="ip-card">
        <div class="ip-card-label">Latest IP Matching Other Members:</div>
        <div class="ip-card-value">' . $__templater->escape($__vars['matchedUsersCount']) . '</div>
    </div>

    <div class="ip-card">
        <div class="ip-card-label">Matching Registration and Last IP:</div>
        <div class="ip-card-value">
            <span style="' . ($__vars['isRegIpAndLastIpMatch'] ? 'color: green;' : 'color: red;') . '">
                ' . ($__vars['isRegIpAndLastIpMatch'] ? 'Yes' : 'No') . '
            </span>
        </div>
    </div>

    <div class="ip-card">
        <div class="ip-card-label">Number of Unique Login IPs:</div>
        <div class="ip-card-value">' . $__templater->escape($__vars['uniqueIpLoginCount']) . '</div>
    </div>
</div>

<div class="ip-section">
    <div class="ip-section-header">
        <i class="fas fa-star icon" style="color: #fff;"></i>
        Reputation and Vouch Count
    </div>

    <div class="ip-card">
        <div class="ip-card-label">Reputation Count:</div>
        <div class="ip-card-value">
            <a href="' . $__templater->func('link', array('members/ratings', $__vars['user'], ), true) . '">
                            <span ' . (($__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), false) > 0) ? 'style="color:#6FB758 !important;"' : 'style="color: #ff1400!important;"') . '>' . $__templater->filter($__vars['user']['mrs_reputation_count'], array(array('number', array()),), true) . '</span>
                        </a>
        </div>
    </div>

    <div class="ip-card">
        <div class="ip-card-label">Vouch Count:</div>
        <div class="ip-card-value">
            <span class="Positive" style="color: green;">
                <a href="' . $__templater->func('link', array('feedback', $__vars['user'], array('reloadList' => 1, 'amountFilter[0]' => 1, ), ), true) . '" class="ip-link">
                    ' . $__templater->filter($__vars['feedback']['fb_positive'], array(array('number', array()),), true) . '
                </a>
            </span>
            /
            <span class="Negative" style="color: red;">
                <a href="' . $__templater->func('link', array('feedback', $__vars['user'], array('reloadList' => 1, 'amountFilter[0]' => -1, ), ), true) . '" class="ip-link">
                    ' . $__templater->filter($__vars['feedback']['fb_negative'], array(array('number', array()),), true) . '
                </a>
            </span>
            /
            <span class="Neutral" style="color: grey;">
                <a href="' . $__templater->func('link', array('feedback', $__vars['user'], array('reloadList' => 1, 'amountFilter[0]' => 0, ), ), true) . '" class="ip-link">
                    ' . $__templater->filter($__vars['feedback']['fb_neutral'], array(array('number', array()),), true) . '
                </a>
            </span>
        </div>
    </div>
</div>

<div class="ip-section">
    <div class="ip-section-header">
        <i class="fas fa-user icon" style="color: #fff;"></i>
        Account Information
    </div>

    <div class="ip-card">
        <div class="ip-card-label">Account Age:</div>
        <div class="ip-card-value">' . $__templater->func('floor', array((($__vars['xf']['time'] - $__vars['user']['register_date'])) / ((60 * (60 * 24))), ), true) . ' Days</div>
    </div>

    <div class="ip-card">
        <div class="ip-card-label">Last Activity:</div>
        <div class="ip-card-value">
            ' . $__templater->func('date_dynamic', array($__vars['user']['last_activity'], array(
	))) . '
        </div>
    </div>

    <div class="ip-card">
        <div class="ip-card-label">Last Password Change:</div>
        <div class="ip-card-value">
            ';
	if (!$__templater->test($__vars['passwordChangeDate'], 'empty', array())) {
		$__finalCompiled .= '
                ' . $__templater->func('date_dynamic', array($__vars['passwordChangeDate'], array(
		))) . '
            ';
	} else {
		$__finalCompiled .= '
                N/A
            ';
	}
	$__finalCompiled .= '
        </div>
    </div>
</div>

<div class="ip-section">
    <div class="ip-section-header">
        <i class="fas fa-exclamation-triangle icon" style="color: #fff;"></i>
        Deal with Caution
    </div>

    <div class="ip-card">
        <div class="ip-card-label">Deal With Caution Count:</div>
        <div class="ip-card-value">' . $__templater->escape($__vars['user']['xfdev_dwc_count']) . '</div>
    </div>

    <div class="ip-card">
        <div class="ip-card-label">Currently Deal with Caution:</div>
        <div class="ip-card-value">
            <span style="' . ($__vars['user']['xfdev_is_dwc'] ? 'color: green;' : 'color: red;') . '">
                ' . ($__vars['user']['xfdev_is_dwc'] ? 'Yes' : 'No') . '
            </span>
        </div>
    </div>
</div>

<div class="ip-section">
    <div class="ip-section-header">
        <i class="fas fa-info-circle icon" style="color: #fff;"></i>
        <span style="color:red;">Security and Caution Advisory</span>
    </div>
    <div class="ip-card">
        <div class="ip-card-value">This notice is intended to serve as a gentle reminder that our tool does not offer any explicit assurance or guarantee with respect to the reliability or trustworthiness of its users.

Please be informed that any attempts to reach out to our staff concerning an IP mismatch will regrettably be disregarded.
<br /><br />
We sincerely appreciate your cooperation and understanding in this matter.</div>
    </div>
</div>';
	return $__finalCompiled;
}
);