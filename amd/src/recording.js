/* eslint-disable */

import { ACTIONS_AJAX_RECORDING } from "./lib/actions";
import { TEMPLATES, renderTemplate } from "./lib/template";

M.mod_tutoom = M.mod_tutoom || {};

export const joinPlayback = async (e) => {
  e.preventDefault();

  const tutoom = window.tutoom;
  if (!tutoom || tutoom === undefined) throw new Error("Tutoom data is empty");

  const { baseUrl, id: ID } = tutoom;

  const { meetingid } = e.target.dataset;

  try {
    const url = `${baseUrl}?action=${ACTIONS_AJAX_RECORDING.JOIN_PLAYBACK}&sesskey=${M.cfg.sesskey}&id=${ID}&meetingId=${meetingid}`;
    const fetch = await window.fetch(url);
    const response = await fetch.json();

    const {joinurl}  = response;

    if (joinurl) {
      window.location.href = joinurl;
    }

  } catch (error) {
    console.error(error);
  }
};

export const getRecordings = async ({ page = 1 }) => {
  const tutoom = window.tutoom;
  if (!tutoom || tutoom === undefined) throw new Error("Tutoom data is empty");

  const { baseUrl, id: ID } = tutoom;

  const elementRecordingTableContent = document.getElementById(
    "tutoom-recordings-table-content"
  );
  const elementRecordingLoader = document.getElementById(
    "tutoom_view_recordings_loading"
  );

  try {
    // Show loader recordings.
    elementRecordingTableContent.innerHTML = "";
    elementRecordingLoader.style.display = "flex";
    
    const url = `${baseUrl}?action=${ACTIONS_AJAX_RECORDING.GET_RECORDINGS}&sesskey=${M.cfg.sesskey}&id=${ID}&page=${page}`;
    const fetch = await window.fetch(url);
    const {recordings, pageSize, totalRecords } = await fetch.json();


    let records = []
    let isemptyrecordings = false
    if(recordings === undefined){
      isemptyrecordings = true
    } else{
      
      records = recordings.map((r, index) => {
      const isLastIndex = index === recordings.length - 1;
      const renderRowSeparator = !isLastIndex;
      const { recordingDuration, creationTime, roomId, recordingThumbnail } = r;

      const language = window.navigator.language;

      const hours = Math.floor(recordingDuration / 3600);
      const minutes = Math.floor((recordingDuration % 3600) / 60) + "min";

      const duration = hours > 0 ? `${hours}h ${minutes}` : minutes;
      
      const date = new Date(creationTime * 1000).toLocaleString(language, {
        month: "short",
        day: "numeric",
        year: "numeric",
      });
      const time = new Date(creationTime * 1000).toLocaleString(language, {
        hour: "numeric",
        minute: "numeric",
        hour12: true,
      });
      
      return {
        meetingid: roomId,
        thumbnail: recordingThumbnail,
        duration,
        date,
        time,
        renderRowSeparator,
      };
    });
    }
    

    const callbackBeforeRender = () => {
      elementRecordingLoader.style.display = "none";
    };

    const callbackAfterRender = () => {
      const thumbnails = document.querySelectorAll(".thumbnail");
      thumbnails.forEach((thumbnail) => {
        thumbnail.addEventListener("click", joinPlayback);
      });
    };

    await renderTemplate({
      data: { recordings: records, isemptyrecordings: isemptyrecordings, countrecordings: totalRecords },
      type: TEMPLATES.RECORDING_SECTION,
      callbackBeforeRender,
      callbackAfterRender,
    });

    
    if(recordings != undefined){

      const totalPages = Math.ceil(totalRecords / pageSize);
      const pages = [...Array(totalPages).keys()].map((n) => ({
        number: n + 1,
        isSelected: n + 1 === page,
      }));
  
      const currentPage = pages.findIndex((p) => p.isSelected) + 1;
  
      if (totalPages > 1) {
        const dataPagination = {
          pages,
          disablePrevious: page === 1,
          disableNext: page === totalPages,
          currentPage,
        };
  
        renderTemplate({
          data: dataPagination,
          type: TEMPLATES.RECORDING_PAGINATION,
        });
      }
    }
     
    
  } catch (error) {
    console.error(error);
  }
};
