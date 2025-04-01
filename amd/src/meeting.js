/* eslint-disable */
import { ACTIONS_AJAX_MEETING } from "./lib/actions";
import { TEMPLATES, renderTemplate } from "./lib/template";

M.mod_tutoom = M.mod_tutoom || {};

const spinnerHTML =
  "<div class='spinner-border spinner-border-sm text-dark'></div>";

export const getMeeting = async () => {
  const tutoom = window.tutoom;
  if (!tutoom || tutoom === undefined) throw new Error("Tutoom data is empty");

  const { baseUrl, id: ID } = tutoom;

  const url = `${baseUrl}?action=${ACTIONS_AJAX_MEETING.GET_MEETING}&sesskey=${M.cfg.sesskey}&id=${ID}`;
  return await window.fetch(url);
};

export const startMeeting = async (e) => {
  e.preventDefault();

  const tutoom = window.tutoom;
  if (!tutoom || tutoom === undefined) throw new Error("Tutoom data is empty");

  const { baseUrl, id: ID, isModerator } = tutoom;

  const elementButton = document.getElementById("tutoom-start-button");

  const widthButton = elementButton.offsetWidth;
  const lastHTML = elementButton.innerHTML;

  elementButton.style.width = `${widthButton}px`;
  elementButton.innerHTML = spinnerHTML;

  try {
    const url = `${baseUrl}?action=${ACTIONS_AJAX_MEETING.START_MEETING}&sesskey=${M.cfg.sesskey}&id=${ID}&logoutUrl=${window.location.href}`;
    const fetch = await window.fetch(url);
    const response = await fetch.json();

    const { error, roomId, numParticipants, meetingDate } = response;

    if (error) {
      const data = { error: true, errorcode: error.code, errormessage: error.message };
      renderTemplate({ data, type: TEMPLATES.MAIN_SECTION });
    }

    if (roomId) {
    
      const data = {
        meetingid: roomId,
        ismoderator: isModerator,
        meetingdate: meetingDate,
        participantscount: `${numParticipants}`,
        istextpluralparticipant: numParticipants > 1,
      };

      renderTemplate({ data, type: TEMPLATES.MAIN_SECTION });
    }
  } catch (error) {
    console.error(error);
    elementButton.innerHTML = lastHTML;
  }
};

export const joinMeeting = async (e) => {
  e.preventDefault();

  const tutoom = window.tutoom;
  if (!tutoom || tutoom === undefined) throw new Error("Tutoom data is empty");

  const { baseUrl, id: ID } = tutoom;

  const elementButton = document.getElementById("tutoom-join-button");

  const widthButton = elementButton.offsetWidth;
  const lastHTML = elementButton.innerHTML;

  elementButton.style.width = `${widthButton}px`;
  elementButton.innerHTML = spinnerHTML;

  try {
    const url = `${baseUrl}?action=${ACTIONS_AJAX_MEETING.JOIN_MEETING}&sesskey=${M.cfg.sesskey}&id=${ID}`;
    const fetch = await window.fetch(url);
    const response = await fetch.json();

    const {error, joinurl}  = response;
    
    if (error) {
      if(error.statuscode === 404){
        const data = { error: true,  meetingidnotexists: true };
        renderTemplate({ data, type: TEMPLATES.MAIN_SECTION });
      }else{
        const data = { error: true, errorcode: error.code, errormessage: error.message };
        renderTemplate({ data, type: TEMPLATES.MAIN_SECTION });
      }
    }

    if (joinurl) {
      window.location.href = joinurl;
    }

  } catch (error) {
    console.error(error);
  } finally {
    elementButton.innerHTML = lastHTML;
  }
};

export const endMeeting = async (e) => {
  e.preventDefault();

  const tutoom = window.tutoom;
  if (!tutoom || tutoom === undefined) throw new Error("Tutoom data is empty");

  const { baseUrl, id: ID } = tutoom;

  const elementButton = document.getElementById("tutoom-end-button");

  const value = e.target.value;
  const widthButton = elementButton.offsetWidth;
  const lastHTML = elementButton.innerHTML;

  elementButton.style.width = `${widthButton}px`;
  elementButton.innerHTML = `<div class='spinner-border spinner-border-sm text-danger'></div>`;

  try {
    const url = `${baseUrl}?action=${ACTIONS_AJAX_MEETING.END_MEETING}&sesskey=${M.cfg.sesskey}&id=${ID}&meetingId=${value}`;
    const fetch = await window.fetch(url);
    const response = await fetch.json();

    const { error, deleted } = response;

    if (error) {
      if(error.statuscode === 404){
        const data = { error: true,  meetingidnotexists: true };
        renderTemplate({ data, type: TEMPLATES.MAIN_SECTION });
      }else{
        const data = { error: true, errorcode: error.code, errormessage: error.message };
        renderTemplate({ data, type: TEMPLATES.MAIN_SECTION });
      }
    }

    if (deleted) clearMainSection(e);
  } catch (error) {
    console.error(error);
  } finally {
    elementButton.innerHTML = lastHTML;
  }
};

export const clearMainSection = (e) => {
  e.preventDefault();

  const tutoom = window.tutoom;
  if (!tutoom || tutoom === undefined) throw new Error("Tutoom data is empty");

  const { isModerator } = tutoom;

  const data = { meetingid: null, ismoderator: isModerator };
  renderTemplate({ data, type: TEMPLATES.MAIN_SECTION });
};
