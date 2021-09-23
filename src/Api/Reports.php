<?php

namespace Amz\Reports\Api;

use Amz\Reports\Model\CreateReportResponse as CreateReportResponse;
use Amz\Reports\Model\CreateReportScheduleResponse as CreateReportScheduleResponse;
use Amz\Reports\Model\CreateReportScheduleSpecification as CreateReportScheduleSpecification;
use Amz\Reports\Model\CreateReportSpecification as CreateReportSpecification;
use Amz\Reports\Model\ErrorList as ErrorList;
use Amz\Reports\Model\GetReportsResponse as GetReportsResponse;
use Amz\Reports\Model\Report as Report;
use Amz\Reports\Model\ReportDocument as ReportDocument;
use Amz\Reports\Model\ReportSchedule as ReportSchedule;
use Amz\Reports\Model\ReportScheduleList as ReportScheduleList;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Reports extends AbstractAPI
{
    /**
     * Returns report details for the reports that match the filters that you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0222 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'reportTypes'		A list of report types used to filter reports. When reportTypes
     *                       is provided, the other filter parameters (processingStatuses, marketplaceIds,
     *                       createdSince, createdUntil) and pageSize may also be provided. Either
     *                       reportTypes or nextToken is required.
     *                       'processingStatuses'		A list of processing statuses used to filter reports.
     *                       'marketplaceIds'		A list of marketplace identifiers used to filter reports. The
     *                       reports returned will match at least one of the marketplaces that you specify.
     *                       'pageSize'		The maximum number of reports to return in a single call.
     *                       'createdSince'		The earliest report creation date and time for reports to
     *                       include in the response, in ISO 8601 date time format. The default is 90 days
     *                       ago. Reports are retained for a maximum of 90 days.
     *                       'createdUntil'		The latest report creation date and time for reports to include
     *                       in the response, in ISO 8601 date time format. The default is now.
     *                       'nextToken'		A string token returned in the response to your previous request.
     *                       nextToken is returned when the number of results exceeds the specified pageSize
     *                       value. To get the next page of results, call the getReports operation and
     *                       include this token as the only parameter. Specifying nextToken with any other
     *                       parameters will cause the request to fail.
     *
     * @return GetReportsResponse|ErrorList
     */
    public function get(array $queries = [])
    {
        return $this->client->request('getReports', 'GET', '/reports/2021-06-30/reports',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Creates a report.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0167 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param CreateReportSpecification $Model Creates a report.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0167 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateReportResponse|ErrorList
     */
    public function createReport(CreateReportSpecification $Model)
    {
        return $this->client->request('createReport', 'POST', '/reports/2021-06-30/reports',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns report details (including the reportDocumentId, if available) for the
     * report that you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2.0 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $reportId The identifier for the report. This identifier is unique only
     * in combination with a seller ID.
     *
     * @return Report|ErrorList
     */
    public function getReport($reportId)
    {
        return $this->client->request('getReport', 'GET', "/reports/2021-06-30/reports/{$reportId}",
            [
            ]
        );
    }

    /**
     * Cancels the report that you specify. Only reports with processingStatus=IN_QUEUE
     * can be cancelled. Cancelled reports are returned in subsequent calls to the
     * getReport and getReports operations.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0222 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $reportId The identifier for the report. This identifier is unique only
     * in combination with a seller ID.
     *
     * @return ErrorList
     */
    public function cancelReport($reportId): ErrorList
    {
        return $this->client->request('cancelReport', 'DELETE', "/reports/2021-06-30/reports/{$reportId}",
            [
            ]
        );
    }

    /**
     * Returns report schedule details that match the filters that you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0222 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'reportTypes'		A list of report types used to filter report schedules
     *
     * @return ReportScheduleList|ErrorList
     */
    public function getReportSchedules(array $queries = [])
    {
        return $this->client->request('getReportSchedules', 'GET', '/reports/2021-06-30/schedules',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Creates a report schedule. If a report schedule with the same report type and
     * marketplace IDs already exists, it will be cancelled and replaced with this one.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0222 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param CreateReportScheduleSpecification $Model Creates a report schedule. If a
     *                                                 report schedule with the same report type and marketplace IDs already exists, it
     *                                                 will be cancelled and replaced with this one.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0222 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateReportScheduleResponse|ErrorList
     */
    public function createReportSchedule(CreateReportScheduleSpecification $Model)
    {
        return $this->client->request('createReportSchedule', 'POST', '/reports/2021-06-30/schedules',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns report schedule details for the report schedule that you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0222 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $reportScheduleId The identifier for the report schedule. This identifier
     * is unique only in combination with a seller ID.
     *
     * @return ReportSchedule|ErrorList
     */
    public function getReportSchedule($reportScheduleId)
    {
        return $this->client->request('getReportSchedule', 'GET', "/reports/2021-06-30/schedules/{$reportScheduleId}",
            [
            ]
        );
    }

    /**
     * Cancels the report schedule that you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0222 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $reportScheduleId The identifier for the report schedule. This identifier
     * is unique only in combination with a seller ID.
     *
     * @return ErrorList
     */
    public function cancelReportSchedule($reportScheduleId): ErrorList
    {
        return $this->client->request('cancelReportSchedule', 'DELETE', "/reports/2021-06-30/schedules/{$reportScheduleId}",
            [
            ]
        );
    }

    /**
     * Returns the information required for retrieving a report document's contents.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.0167 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $reportDocumentId The identifier for the report document
     *
     * @return ReportDocument|ErrorList
     */
    public function getReportDocument($reportDocumentId)
    {
        return $this->client->request('getReportDocument', 'GET', "/reports/2021-06-30/documents/{$reportDocumentId}",
            [
            ]
        );
    }
}
