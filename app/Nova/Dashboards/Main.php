<?php

namespace App\Nova\Dashboards;

use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;
use Coroowicaksono\ChartJsIntegration\StackedChart;
use Coroowicaksono\ChartJsIntegration\PieChart;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            (new StackedChart())
            ->title('Job Applications')
            ->model('\App\Models\JobApplication') // Use Your Model Here
            ->width('2/3')
            ->options([
                'queryFilter' => array([
                    'key' => 'updated_at',
                    'operator' => 'IS NOT NULL',
                ])
            ]),
            (new StackedChart())
            ->title('Online Applications')
            ->model('\App\Models\ApplicationFormSubmission') // Use Your Model Here
            ->width('2/3')
            ->options([
                'queryFilter' => array([
                    'key' => 'updated_at',
                    'operator' => 'IS NOT NULL',
                ])
            ]),
            (new StackedChart())
            ->title('Ideabox Submission')
            ->model('\App\Models\IdeaBoxSubmission') // Use Your Model Here
            ->width('2/3')
            ->options([
                'queryFilter' => array([
                    'key' => 'updated_at',
                    'operator' => 'IS NOT NULL',
                ])
            ]),
        ];
    }
}
