<?php

namespace Admin\Extend\AdminFailedJobs;

use Admin\Extend\AdminFailedJobs\Models\FailedJobs;
use Admin\Page;
use App\Admin\Controllers\Controller;
use App\Admin\Delegates\Card;
use App\Admin\Delegates\Form;
use App\Admin\Delegates\SearchForm;
use App\Admin\Delegates\ModelTable;
use App\Admin\Delegates\ModelInfoTable;

class FailedJobsController extends Controller
{
    /**
     * Static variable Model
     * @var string
     */
    static $model = FailedJobs::class;

    public function defaultTools($type)
    {
        return !($type === 'edit' || $type === 'add');
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param SearchForm $searchForm
     * @param ModelTable $modelTable
     * @return Page
     */
    public function index(Page $page, Card $card, SearchForm $searchForm, ModelTable $modelTable) : Page
    {
        return $page->card(
            $card->search_form(
                $searchForm->id(),
                $searchForm->input('connection', 'Connection'),
                $searchForm->input('queue', 'Queue'),
                $searchForm->date_time_range('failed_at', 'Failed at'),
            ),
            $card->model_table(
                $modelTable->id(),
                $modelTable->col('Connection', 'connection')->sort()->to_export(),
                $modelTable->col('Queue', 'queue')->sort()->to_export(),
                $modelTable->col('Payload', 'payload')->only_export(),
                $modelTable->col('Exception', 'exception')->only_export(),
                $modelTable->col('Failed at', 'failed_at')->sort()->beautiful_date_time->to_export(),
                $modelTable->controlEdit(false),
            ),
        );
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param Form $form
     * @return Page
     */
    public function matrix(Page $page, Card $card, Form $form) : Page
    {
        return $page->card(
            $card->form(
                $form->ifEdit()->info_id(),
                $form->ifEdit()->info_updated_at(),
                $form->ifEdit()->info_created_at(),
            ),
            $card->footer_form(),
        );
    }

    /**
     * @param Page $page
     * @param Card $card
     * @param ModelInfoTable $modelInfoTable
     * @return Page
     */
    public function show(Page $page, Card $card, ModelInfoTable $modelInfoTable) : Page
    {
        return $page->card(
            $card->model_info_table(
                $modelInfoTable->id(),
                $modelInfoTable->row('Connection', 'connection'),
                $modelInfoTable->row('Queue', 'queue'),
                $modelInfoTable->row('Payload', 'payload')->to_json,
                $modelInfoTable->row('Exception', 'exception'),
                $modelInfoTable->row('Failed at', 'failed_at')->beautiful_date_time,
            ),
        );
    }

}
