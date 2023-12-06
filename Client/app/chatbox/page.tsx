"use client"

import Chatbox from "@/components/chatbox"
import ChatBoxCards from "@/components/chatboxCards"

export default function Component() {
  return (
    <div className="flex flex-row">
      <Chatbox />
      <ChatBoxCards />
    </div>
  )
}
