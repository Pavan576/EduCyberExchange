<?php
// FROM HASH: 2fd8d7ab3b0647495b3dbdb22c4973a8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.awardsPostbitContainer
{
    margin-top: @xf-af_as_postbit_marginTop;
    margin-bottom: @xf-af_as_postbit_marginBottom;
}

ul.awardsPostbitList
{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
	text-align: center;
    padding: 0px;
    justify-content: center;

    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    -webkit-box-pack: space-evenly;
    -ms-flex-pack: space-evenly;

    > li
    {
        height: @xf-af_as_postbit_award_height;
        margin-bottom: @xf-af_as_postbit_award_marginBottom;

        img
        {
            height: 100%;
            vertical-align: middle;
        }

        &:last-child
        {
            margin-bottom: 0;
        }
    }
}

ul.awardsPostbitlist {
	justify-content: space-evenly;
}

.awardsPostbitCarousel
{
    margin-bottom: 0 !important; // override XF class

    div.carousel-item
    {
        text-align: center;
        padding: @xf-af_as_postbit_c_award_padding;

        img
        {
            height: @xf-af_as_postbit_c_award_height;
        }
    }

    // make dots take less space
    .lSSlideOuter .lSPager.lSpg > li
    {
        height: 16px;
        line-height: 16px;
        padding: 0 3px;
    }
}

.awardsPostbitLevelGraph
{
    display: flex;
    align-items: center;

    .awardsPostbitList + &, .awardsPostbitCarousel + &
    {
        margin-top: 3px;
    }

    .awardLevelProgress-graph
    {
        flex: 1 0 auto;
    }
}

.awardsPostbitFeatureBtn
{
    text-align: center;

    // add some margin if displaying with awards
    .awardsPostbitList + &, .awardsPostbitCarousel + &, .awardsPostbitLevelGraph + &
    {
        margin-top: 3px;
    }
}

@media (max-width: @xf-messageSingleColumnWidth)
{
    .awardsPostbitContainer
    {
        display: none;
    }
}';
	return $__finalCompiled;
}
);