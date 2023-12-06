"use client"

import { Avatar, AvatarFallback, AvatarImage } from "@/components/ui/avatar"
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"

export default function Chatbox() {
  return (
    <div className="w-1/2">
      <header className="flex h-14 items-center gap-4 border-b bg-gray-100/40 px-6 dark:bg-gray-800/40">
        <h1 className="font-semibold text-lg">Chat with Doctor</h1>
        <div className="ml-auto">
          <Button size="icon" variant="ghost">
            <span className="sr-only">More options</span>
          </Button>
        </div>
      </header>
      <main className="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-6">
        <div className="flex-1 overflow-y-auto">
          <div className="flex items-start gap-2 mb-4">
            <Avatar>
              <AvatarImage src="https://github.com/shadcn.png" />
              <AvatarFallback>CN</AvatarFallback>
            </Avatar>
            <div>
              <p className="font-semibold">John Doe</p>
              <p>Hello, everyone!</p>
            </div>
          </div>
          <div className="flex items-start gap-2 mb-4">
            <Avatar>
              <AvatarImage src="https://github.com/shadcn.png" />
              <AvatarFallback>CN</AvatarFallback>
            </Avatar>
            <div>
              <p className="font-semibold">Jane Smith</p>
              <p>Hi John, how are you?</p>
            </div>
          </div>
        </div>
        <div className="p-2 border-t">
          <form>
            <Input className="w-full" placeholder="Type your message..." />
          </form>
        </div>
      </main>
    </div>
  )
}
