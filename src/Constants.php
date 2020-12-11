<?php
namespace Ourted;

const PERMISSION_CREATE_INSTANT_INVITE = 0x00000001;
const PERMISSION_KICK_MEMBERS = 0x00000002;
const PERMISSION_BAN_MEMBERS = 0x00000004;
const PERMISSION_ADMINISTRATOR = 0x00000008;
const PERMISSION_MANAGE_CHANNELS = 0x00000010;
const PERMISSION_MANAGE_GUILD = 0x00000020;
const PERMISSION_ADD_REACTIONS = 0x00000040;
const PERMISSION_VIEW_AUDIT_LOG = 0x00000080;
const PERMISSION_PRIORITY_SPEAKER = 0x00000100;
const PERMISSION_STREAM = 0x00000200;
const PERMISSION_VIEW_CHANNEL = 0x00000400;
const PERMISSION_SEND_MESSAGES = 0x00000800;
const PERMISSION_SEND_TTS_MESSAGES = 0x00001000;
const PERMISSION_MANAGE_MESSAGES = 0x00002000;
const PERMISSION_EMBED_LINKS = 0x00004000;
const PERMISSION_ATTACH_FILES = 0x00008000;
const PERMISSION_READ_MESSAGE_HISTORY = 0x00010000;
const PERMISSION_MENTION_EVERYONE = 0x00020000;
const PERMISSION_USE_EXTERNAL_EMOJIS = 0x00040000;
const PERMISSION_VIEW_GUILD_INSIGHTS = 0x00080000;
const PERMISSION_CONNECT = 0x00100000;
const PERMISSION_SPEAK = 0x00200000;
const PERMISSION_MUTE_MEMBERS = 0x00400000;
const PERMISSION_DEAFEN_MEMBERS = 0x00800000;
const PERMISSION_MOVE_MEMBERS = 0x01000000;
const PERMISSION_USE_VAD = 0x02000000;
const PERMISSION_CHANGE_NICKNAME = 0x04000000;
const PERMISSION_MANAGE_NICKNAMES = 0x08000000;
const PERMISSION_MANAGE_ROLES = 0x10000000;
const PERMISSION_MANAGE_WEBHOOKS = 0x20000000;
const PERMISSION_MANAGE_EMOJIS = 0x40000000;

const CHANNEL_CHANNEL_GUILD_TEXT = 0;
const CHANNEL_DM = 1;
const CHANNEL_GUILD_VOICE = 2;
const CHANNEL_GROUP_DM = 3;
const CHANNEL_GUILD_NEWS = 4;
const CHANNEL_GUILD_STORE = 5;

const GAME_LISTEN = 2;
const GAME_WATCHING = 1;
const GAME_PLAYING = 0;

const OVERWRITE_TYPE_ROLE = 0;
const OVERWRITE_TYPE_MEMBER = 1;

class Constants{

}