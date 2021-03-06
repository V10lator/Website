<?php

namespace PN\Resources;


use PN\Foundation\Presenters\Presenter;

class BlueprintPresenter extends Presenter implements ResourcePresenterInterface
{
    public function imageUrl()
    {
    }

    public function getStatGroups()
    {
        return [
            "Ratings" => [
                "RatingExcitement",
                "RatingIntensity",
                "RatingNausea"
            ],
            "Drops" => [
                "AirTime",
                "Drops",
                "TotalDropHeight",
                "BiggestDrop"
            ],
            "Speeds" => [
                "AverageSpeed",
                "MaxSpeed"
            ],
            "G-Force" => [
                "MinVertG",
                "MaxVertG",
                "MinLatG",
                "MaxLatG",
                "MinLongG",
                "MaxLongG"
            ],
            "Ride" => [
                "RideLengthDistance",
                "RideLengthTime",
                "Inversions",
                "HeadChoppers"
            ],
            "Miscellaneous" => [
                "EntranceFee",
                "TrainCount",
                "TrainLength",
                "TrainTotal"
            ]
        ];
    }

    public function isReleasable()
    {
        return false;
    }

    public function getVersion()
    {
        return null;
    }

    public function getZipBallUrl()
    {
        return null;
    }
}
