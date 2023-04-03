<template>
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
          <div class="d-flex align-items-center justify-content-between">
            <h4>Set Your weekly hours</h4>
          </div>
          <div class="create-workform">
            <button type="button" class="btn btn-primary position-relative d-flex align-items-center justify-content-between" data-bs-toggle="modal" :options="viewModeOptions" data-bs-target="#modalcal">
              <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
                Add New Event
            </button>
          </div>
        </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-block card-stretch">
                  <div class="card-body">
                    <div id="calendar1" class="calendar-s"></div>
                    <FullCalendar :options="calendarOptions"/>
                  </div>
              </div>
            </div>
          </div>
      </div>
      <modal id="modalcal" tabindex="-1" title="Create Post" aria-labelledby="modalcalLabel" aria-hidden="true">
        <model-header>
            <h5 class="modal-title" id="modalcalLabel">Add New Event</h5>
            <button :dismissable="true" type="button" class="btn-close" data-bs-dismiss="modal">
            </button>
        </model-header>
        <model-body>
          <div class="row">
            <div class="col-md-12 mb-3">
                <label for="Text1" class="form-label font-weight-bold text-muted text-uppercase">Event Title</label>
                <input type="text" class="form-control" id="Text1" placeholder="Enter Event Title">
            </div>
            <div class="col-md-12">
                <label for="Text5" class="form-label font-weight-bold text-muted text-uppercase">Date & Time</label>
            </div>
            <div class="col-md-6 mb-3">
                <div class="input-group">
                  <input type="text" class="form-control vanila-datepicker" name="range-start" placeholder="Start Date">
                  <div class="input-group-append">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                      </span>
                  </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="input-group">
                  <input type="text" class="form-control vanila-datepicker" name="range-end" placeholder="End Date">
                  <div class="input-group-append" style="user-select: auto;">
                      <span class="input-group-text" style="user-select: auto;">
                          <svg xmlns="http://www.w3.org/2000/svg" class="" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="user-select: auto;">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" style="user-select: auto;"></path>
                          </svg>
                      </span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-3">
            <div class="form-check form-check-inline">
                  <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox1">
                      <label class="custom-control-label" for="inlineCheckbox1">All Day</label>
                  </div>
            </div>
            <div class="form-check form-check-inline">
                  <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox2" checked>
                      <label class="custom-control-label" for="inlineCheckbox2">Does not repeat</label>
                  </div>
            </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="inputState" class="form-label font-weight-bold text-muted text-uppercase">Category</label>
                <select id="inputState" class="form-select form-control choicesjs">
                  <option selected="">Select Category</option>
                  <option>
                        Appointments
                  </option>
                  <option>Birthday</option>
                  <option>Meetings</option>
                  <option>Tour</option>
                  <option>Anniversary</option>
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="Text9" class="form-label font-weight-bold text-muted text-uppercase">Description</label>
                <textarea class="form-control" id="Text9" rows="2" placeholder="Enter Description"></textarea>
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary">Add Event</button>
          </div>
        </model-body>
      </modal>
    </div>
</template>
<script>
import '@fullcalendar/core/vdom' // solves problem with Vite
import FullCalendar from '@fullcalendar/vue3'
import interactionPlugin from '@fullcalendar/interaction'
import dayGridPlugin from '@fullcalendar/daygrid'
import timeGridPlugin from '@fullcalendar/timegrid'
import listPlugin from '@fullcalendar/list'
import bootstrapPlugin from '@fullcalendar/bootstrap'
import moment from 'moment'
export default {
  name: 'Calendar',
  components: {
    FullCalendar // make the <FullCalendar> tag available
  },
  data () {
    return {
      viewModeOptions: [
        {
          text: 'Monthly',
          value: 'month'
        },
        {
          text: 'Weekly',
          value: 'week'
        },
        {
          text: 'Daily',
          value: 'day'
        }
      ],
      calendarOptions: {
        plugins: [
          dayGridPlugin,
          timeGridPlugin,
          interactionPlugin, // needed for dateClick
          listPlugin,
          bootstrapPlugin
        ],
        timeZone: 'UTC',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        weekNumbers: false,
        initialView: 'dayGridMonth',
        initialEvents: [], // alternatively, use the `events` setting to fetch from a feed
        editable: true,
        selectable: true,
        selectMirror: true,
        dayMaxEvents: true,
        weekends: true,
        select: this.handleDateSelect,
        events: [
          {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: moment(new Date(), 'YYYY-MM-DD').add(-20, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#4731b6'
          },
          {
            title: 'All Day Event',
            start: moment(new Date(), 'YYYY-MM-DD').add(-18, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#465af7'
          },
          {
            title: 'Long Event',
            start: moment(new Date(), 'YYYY-MM-DD').add(-16, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            end: moment(new Date(), 'YYYY-MM-DD').add(-13, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#7858d7'
          },
          {
            groupId: '999',
            title: 'Repeating Event',
            start: moment(new Date(), 'YYYY-MM-DD').add(-14, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#465af7'
          },
          {
            groupId: '999',
            title: 'Repeating Event',
            start: moment(new Date(), 'YYYY-MM-DD').add(-12, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#5baa73'
          },
          {
            groupId: '999',
            title: 'Repeating Event',
            start: moment(new Date(), 'YYYY-MM-DD').add(-10, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#01041b'
          },
          {
            title: 'Birthday Party',
            start: moment(new Date(), 'YYYY-MM-DD').add(-8, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#4731b6'
          },
          {
            title: 'Meeting',
            start: moment(new Date(), 'YYYY-MM-DD').add(-6, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#15ca92'
          },
          {
            title: 'Birthday Party',
            start: moment(new Date(), 'YYYY-MM-DD').add(-5, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#f4a965'
          },
          {
            title: 'Birthday Party',
            start: moment(new Date(), 'YYYY-MM-DD').add(-2, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#ea643f'
          },

          {
            title: 'Meeting',
            start: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#15ca92'
          },
          {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T06:30:00.000Z',
            color: '#4731b6'
          },
          {
            groupId: '999',
            title: 'Repeating Event',
            start: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T07:30:00.000Z',
            color: '#5baa73'
          },
          {
            title: 'Birthday Party',
            start: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T08:30:00.000Z',
            color: '#f4a965'
          },
          {
            title: 'Doctor Meeting',
            start: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#f4a965'
          },
          {
            title: 'All Day Event',
            start: moment(new Date(), 'YYYY-MM-DD').add(1, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#465af7'
          },
          {
            groupId: '999',
            title: 'Repeating Event',
            start: moment(new Date(), 'YYYY-MM-DD').add(8, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#465af7'
          },
          {
            groupId: '999',
            title: 'Repeating Event',
            start: moment(new Date(), 'YYYY-MM-DD').add(10, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
            color: '#5baa73'
          }
        ]
      }
    }
  }
}
</script>
