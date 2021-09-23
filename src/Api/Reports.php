<?php

namespace Amz\Reports\Api;

use Amz\Reports\Model\CancelReportResponse as CancelReportResponse;
use Amz\Reports\Model\CancelReportScheduleResponse as CancelReportScheduleResponse;
use Amz\Reports\Model\CreateReportResponse as CreateReportResponse;
use Amz\Reports\Model\CreateReportScheduleResponse as CreateReportScheduleResponse;
use Amz\Reports\Model\CreateReportScheduleSpecification as CreateReportScheduleSpecification;
use Amz\Reports\Model\CreateReportSpecification as CreateReportSpecification;
use Amz\Reports\Model\GetReportDocumentResponse as GetReportDocumentResponse;
use Amz\Reports\Model\GetReportResponse as GetReportResponse;
use Amz\Reports\Model\GetReportScheduleResponse as GetReportScheduleResponse;
use Amz\Reports\Model\GetReportSchedulesResponse as GetReportSchedulesResponse;
use Amz\Reports\Model\GetReportsResponse as GetReportsResponse;
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
     * @return GetReportsResponse
     */
    public function get(array $queries = []): GetReportsResponse
    {
        return $this->client->request('getReports', 'GET', '/reports/2020-09-04/reports',
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
     * @return CreateReportResponse
     */
    public function createReport(CreateReportSpecification $Model): CreateReportResponse
    {
        return $this->client->request('createReport', 'POST', '/reports/2020-09-04/reports',
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
     * @return GetReportResponse
     */
    public function getReport($reportId): GetReportResponse
    {
        return $this->client->request('getReport', 'GET', "/reports/2020-09-04/reports/{$reportId}",
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
     * @return CancelReportResponse
     */
    public function cancelReport($reportId): CancelReportResponse
    {
        return $this->client->request('cancelReport', 'DELETE', "/reports/2020-09-04/reports/{$reportId}",
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
     * @return GetReportSchedulesResponse
     */
    public function getReportSchedules(array $queries = []): GetReportSchedulesResponse
    {
        return $this->client->request('getReportSchedules', 'GET', '/reports/2020-09-04/schedules',
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
     * @return CreateReportScheduleResponse
     */
    public function createReportSchedule(CreateReportScheduleSpecification $Model): CreateReportScheduleResponse
    {
        return $this->client->request('createReportSchedule', 'POST', '/reports/2020-09-04/schedules',
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
     * @return GetReportScheduleResponse
     */
    public function getReportSchedule($reportScheduleId): GetReportScheduleResponse
    {
        return $this->client->request('getReportSchedule', 'GET', "/reports/2020-09-04/schedules/{$reportScheduleId}",
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
     * @return CancelReportScheduleResponse
     */
    public function cancelReportSchedule($reportScheduleId): CancelReportScheduleResponse
    {
        return $this->client->request('cancelReportSchedule', 'DELETE', "/reports/2020-09-04/schedules/{$reportScheduleId}",
            [
            ]
        );
    }

    /**
     * Returns the information required for retrieving a report document's contents.
     * This includes a presigned URL for the report document as well as the information
     * required to decrypt the document's contents.
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
     * @return GetReportDocumentResponse
     */
    public function getReportDocument($reportDocumentId): GetReportDocumentResponse
    {
        return $this->client->request('getReportDocument', 'GET', "/reports/2020-09-04/documents/{$reportDocumentId}",
            [
            ]
        );
    }
}
